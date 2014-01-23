<?php

/**
 * SignosVitalesNursery filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSignosVitalesNurseryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'fecha'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hora'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fc_nursery'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fr_nursery'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'to_nursery'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diu_nursery'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cat_nursery'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lm_nursery'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'residuo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observaciones' => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'internado_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'fecha'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora'          => new sfValidatorPass(array('required' => false)),
      'fc_nursery'    => new sfValidatorPass(array('required' => false)),
      'fr_nursery'    => new sfValidatorPass(array('required' => false)),
      'to_nursery'    => new sfValidatorPass(array('required' => false)),
      'diu_nursery'   => new sfValidatorPass(array('required' => false)),
      'cat_nursery'   => new sfValidatorPass(array('required' => false)),
      'lm_nursery'    => new sfValidatorPass(array('required' => false)),
      'residuo'       => new sfValidatorPass(array('required' => false)),
      'observaciones' => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('signos_vitales_nursery_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SignosVitalesNursery';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'internado_id'  => 'ForeignKey',
      'fecha'         => 'Date',
      'hora'          => 'Text',
      'fc_nursery'    => 'Text',
      'fr_nursery'    => 'Text',
      'to_nursery'    => 'Text',
      'diu_nursery'   => 'Text',
      'cat_nursery'   => 'Text',
      'lm_nursery'    => 'Text',
      'residuo'       => 'Text',
      'observaciones' => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
      'created_by'    => 'ForeignKey',
      'updated_by'    => 'ForeignKey',
    );
  }
}
