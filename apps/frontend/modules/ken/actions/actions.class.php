<?php

/**
 * ken actions.
 *
 * @package    kendafrik
 * @subpackage ken
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class kenActions extends sfActions
{
  public function executeSearch(sfWebRequest $request)
  {
    $this->forwardUnless($query = $request->getParameter('keywords'), 'ken', 'index');
    $this->categories = Doctrine_Core::getTable('Category')->getCategoriesList($this->getUser()->getCulture()); 

    if($this->getUser()->hasAttribute('country'))
    {
      $country = $this->getUser()->getAttribute('country');
    }
    else
    {
      $country = null;
    }
    
    $this->kens = Doctrine_Core::getTable('ken')->getForLuceneQuery($query,$country);
    
    if ($request->isXmlHttpRequest())
    { 
      if ('*' == $query || !$this->kens)
      {
        return $this->renderText('No results.');
      }    
      return $this->renderPartial('list', array('kens' => $this->kens));
    }    
  }  

  public function executeCategory(sfWebRequest $request)
  {
    $this->kens = Doctrine_Core::getTable('Ken')->getKensByCat($request->getParameter('slug'),$this->getUser()->getAttribute('country'));              
    $this->categories = Doctrine_Core::getTable('Category')->getCategoriesList($this->getUser()->getCulture());    
    $this->setTemplate('index');            
  }

  public function executeIndex(sfWebRequest $request)
  {
    if (!$request->getParameter('sf_culture'))
    {
      if ($this->getUser()->isFirstRequest())
      {
        $culture = $request->getPreferredCulture(array('en', 'fr', 'es', 'pt'));
        $this->getUser()->setCulture($culture);
        $this->getUser()->isFirstRequest(false);
      }
      else
      {
        $culture = $this->getUser()->getCulture();
     }
 
      $this->redirect('localized_homepage');
    }  
    
    if($request->hasParameter('cn'))
    {
      $this->getUser()->setAttribute('country',$request->getParameter('cn'));                  
    }
              
    if(!$this->getUser()->hasAttribute('country'))
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
          $ip=$_SERVER['REMOTE_ADDR'];
        }
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, "http://api.ipinfodb.com/v3/ip-city/?key=248ccfb1ff84c0b2c0c0522ce687d734625131eb222a282ea8581964b1371a13&ip=".$ip);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_HEADER, false);
        $output = curl_exec($c);
        $output = explode(";", $output);
        if(count($output) > 3)
        {
          $output = $output[3];        
        }
        else
        {
          $output = false;
        }
        if($output === false)
        {
          $location = null;
        }
        else
        {
          if($output == '-')
          {
            $output = null;
          }
          $location = $output;        
        }
        curl_close($c);                
        $this->getUser()->setAttribute('country',$location);                    
    } 
    $this->kens = Doctrine_Core::getTable('Ken')->getLastKens($this->getUser()->getAttribute('country'));              
    $this->categories = Doctrine_Core::getTable('Category')->getCategoriesList($this->getUser()->getCulture());    
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->categories = Doctrine_Core::getTable('Category')->getCategoriesList($this->getUser()->getCulture());  
    $this->ken = Doctrine::getTable('ken')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->ken);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new kenForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new kenForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ken = Doctrine::getTable('ken')->find(array($request->getParameter('id'))), sprintf('Object ken does not exist (%s).', $request->getParameter('id')));
    $this->form = new kenForm($ken);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ken = Doctrine::getTable('ken')->find(array($request->getParameter('id'))), sprintf('Object ken does not exist (%s).', $request->getParameter('id')));
    $this->form = new kenForm($ken);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ken = Doctrine::getTable('ken')->find(array($request->getParameter('id'))), sprintf('Object ken does not exist (%s).', $request->getParameter('id')));
    $ken->delete();

    $this->redirect('ken/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $captcha = array(
       'recaptcha_challenge_field' => $request->getParameter('recaptcha_challenge_field'),
       'recaptcha_response_field'  => $request->getParameter('recaptcha_response_field'),
    );                    
    
    $form->bind(array_merge($request->getParameter($form->getName()), array('captcha' => $captcha)), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ken = $form->save();

      $this->redirect('@ken_show/id='.$ken->getId());
    }
  }
}
