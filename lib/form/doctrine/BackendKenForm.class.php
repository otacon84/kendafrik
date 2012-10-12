<?php

/**
 * Ken form.
 *
 * @package    kendafrik
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BackendKenForm extends BaseKenForm
{                                                                                                                                
  public function configure()
  {
  	$this->useFields(array('category_id','type','objet','etat','prix','devise','debattre','pays','ville','email','tel1','tel2','supplement'));    
    $this->widgetSchema->setNameFormat('ken[%s]');
    $this->widgetSchema->setFormFormatterName('list');  
    	
    //WIDGETS
    $this->widgetSchema['type'] = new sfWidgetFormSelect(array('choices' => Doctrine_Core::getTable('Ken')->getType()));            
    $this->widgetSchema['objet'] = new sfWidgetFormInputText();    
    $this->widgetSchema['etat'] = new sfWidgetFormSelect(array('choices' => Doctrine_Core::getTable('Ken')->getEtat()));            
    $this->widgetSchema['prix'] = new sfWidgetFormInputText();    
    $this->widgetSchema['devise'] = new sfWidgetFormSelect(array('choices' => Doctrine_Core::getTable('Ken')->getDevise()));                        
    $this->widgetSchema['debattre'] = new sfWidgetFormSelect(array('choices' => Doctrine_Core::getTable('Ken')->getDebattre())); 
    $this->widgetSchema['pays'] = new sfWidgetFormSelect(array('choices' => Doctrine_Core::getTable('Ken')->getPays()));     
    $this->widgetSchema['ville'] = new sfWidgetFormInputText();    
    $this->widgetSchema['email'] = new sfWidgetFormInputText();        
    $this->widgetSchema['tel1'] = new sfWidgetFormInputText();            
    $this->widgetSchema['tel2'] = new sfWidgetFormInputText();  
    $this->widgetSchema['supplement'] = new sfWidgetFormTextarea();      
    $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Image de votre produit :',
      'file_src'  => '/uploads/annonces/'.$this->getObject()->getImage(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br /></div>',
    ));       
 

    //LABELS
    $this->widgetSchema->setLabels(array(
      'type'   => 'Type d\'operation : ',
      'objet' => 'Objet de votre annonce :',
      'etat' => 'Etat de votre produit : ',
      'prix' => 'Prix : ',
      'devise' => 'Devise : ',      
      'debattre' => 'Negociable ou pas : ',
      'email' => 'Votre email : ',            
      'tel1' => 'Telephone 1 : ',                  
      'tel2' => 'Telephone 2 : ',    
      'supplement' => 'Caracteristiques du produit :',                                           
      'pays' => 'Publier l\'annonce dans quel pays ? :',      
      'ville' => 'Publier l\'annonce dans quelle ville ? :',        
      'category_id' => 'Categorie : ',
      'captcha' => 'Saisissez le code affiché :',      
    ));
    

  //VALIDATORS
    $this->validatorSchema['objet'] = new sfValidatorString(array('required' => true, 'max_length' => 200, 'min_length' => 5), 
        array('max_length' => 'Votre annonce est trop longue. Vous devez saisir une annonce de moins %max_length% caractères.',
              'min_length' => 'Votre annonce est trop courte. Vous devez saisir une annonce de plus de %min_length% caractères.',
      ));
    $this->validatorSchema['prix'] = new sfValidatorNumber(array('required' => true, 'min' => 0), 
        array('min' => 'Le prix que vous avez entré est incorrect',
      ));      
    $this->validatorSchema['type'] = new sfValidatorChoice(array('choices' => array_keys(Doctrine_Core::getTable('Ken')->getType())));
    $this->validatorSchema['etat'] = new sfValidatorChoice(array('choices' => array_keys(Doctrine_Core::getTable('Ken')->getEtat())));
    $this->validatorSchema['devise'] = new sfValidatorChoice(array('choices' => array_keys(Doctrine_Core::getTable('Ken')->getDevise())));
    $this->validatorSchema['debattre'] = new sfValidatorChoice(array('choices' => array_keys(Doctrine_Core::getTable('Ken')->getDebattre())));  
    $this->validatorSchema['pays'] = new sfValidatorChoice(array('choices' => array_keys(Doctrine_Core::getTable('Ken')->getPays())));  
    $this->validatorSchema['ville'] = new sfValidatorString(array('required' => false, 'max_length' => 200, 'min_length' => 2), 
        array('max_length' => 'Le nom de la ville est trop long.',
              'min_length' => 'Le nom de la ville est trop court.',
      ));    
    $this->validatorSchema['email'] = new sfValidatorEmail();
    $this->validatorSchema['tel1'] = new myValidatorPhone(array('required' => false));    
    $this->validatorSchema['tel2'] = new myValidatorPhone(array('required' => false));    
    
    $this->validatorSchema['supplement'] = new sfValidatorString(array('required' => false,'min_length' => 4), array(
        'min_length' => 'Le message est trop court. Il faut au moins %min_length% caractères.',
      ));    
    
    $this->validatorSchema['image_delete'] = new sfValidatorPass();
    $this->validatorSchema['image'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/annonces/',
      'mime_types' => 'web_images',
    ));              
  }
}
