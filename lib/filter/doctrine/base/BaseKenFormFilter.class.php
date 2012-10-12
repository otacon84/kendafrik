<?php

/**
 * Ken filter form base class.
 *
 * @package    kendafrik
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseKenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'type'         => new sfWidgetFormFilterInput(),
      'objet'        => new sfWidgetFormFilterInput(),
      'etat'         => new sfWidgetFormFilterInput(),
      'prix'         => new sfWidgetFormFilterInput(),
      'devise'       => new sfWidgetFormFilterInput(),
      'debattre'     => new sfWidgetFormFilterInput(),
      'pays'         => new sfWidgetFormFilterInput(),
      'ville'        => new sfWidgetFormFilterInput(),
      'email'        => new sfWidgetFormFilterInput(),
      'tel1'         => new sfWidgetFormFilterInput(),
      'tel2'         => new sfWidgetFormFilterInput(),
      'supplement'   => new sfWidgetFormFilterInput(),
      'image'        => new sfWidgetFormFilterInput(),
      'is_activated' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'category_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'type'         => new sfValidatorPass(array('required' => false)),
      'objet'        => new sfValidatorPass(array('required' => false)),
      'etat'         => new sfValidatorPass(array('required' => false)),
      'prix'         => new sfValidatorPass(array('required' => false)),
      'devise'       => new sfValidatorPass(array('required' => false)),
      'debattre'     => new sfValidatorPass(array('required' => false)),
      'pays'         => new sfValidatorPass(array('required' => false)),
      'ville'        => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'tel1'         => new sfValidatorPass(array('required' => false)),
      'tel2'         => new sfValidatorPass(array('required' => false)),
      'supplement'   => new sfValidatorPass(array('required' => false)),
      'image'        => new sfValidatorPass(array('required' => false)),
      'is_activated' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ken_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ken';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'category_id'  => 'ForeignKey',
      'type'         => 'Text',
      'objet'        => 'Text',
      'etat'         => 'Text',
      'prix'         => 'Text',
      'devise'       => 'Text',
      'debattre'     => 'Text',
      'pays'         => 'Text',
      'ville'        => 'Text',
      'email'        => 'Text',
      'tel1'         => 'Text',
      'tel2'         => 'Text',
      'supplement'   => 'Text',
      'image'        => 'Text',
      'is_activated' => 'Boolean',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
