<?php

/**
 * Ken form base class.
 *
 * @method Ken getObject() Returns the current form's model object
 *
 * @package    kendafrik
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseKenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'category_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'type'         => new sfWidgetFormInputText(),
      'objet'        => new sfWidgetFormInputText(),
      'etat'         => new sfWidgetFormInputText(),
      'prix'         => new sfWidgetFormInputText(),
      'devise'       => new sfWidgetFormInputText(),
      'debattre'     => new sfWidgetFormInputText(),
      'pays'         => new sfWidgetFormInputText(),
      'ville'        => new sfWidgetFormInputText(),
      'email'        => new sfWidgetFormInputText(),
      'tel1'         => new sfWidgetFormInputText(),
      'tel2'         => new sfWidgetFormInputText(),
      'supplement'   => new sfWidgetFormTextarea(),
      'image'        => new sfWidgetFormInputText(),
      'is_activated' => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'category_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'type'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'objet'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'etat'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'prix'         => new sfValidatorPass(array('required' => false)),
      'devise'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'debattre'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pays'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ville'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tel1'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tel2'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'supplement'   => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'image'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_activated' => new sfValidatorBoolean(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('ken[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ken';
  }

}
