<?php

/**
 * CategoryTranslation form.
 *
 * @package    kendafrik
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoryTranslationForm extends BaseCategoryTranslationForm
{
  public function configure()
  {
    unset($this['slug']);
  }
}
