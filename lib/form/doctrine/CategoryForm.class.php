<?php

/**
 * Category form.
 *
 * @package    kendafrik
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoryForm extends BaseCategoryForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
  
    $this->embedI18n(array('en', 'fr','es','pt'));
    $this->widgetSchema->setLabel('en', 'Anglais');
    $this->widgetSchema->setLabel('fr', 'Francais');  
    $this->widgetSchema->setLabel('es', 'Espagnole');      
    $this->widgetSchema->setLabel('pt', 'Portugais');         
  }
}
