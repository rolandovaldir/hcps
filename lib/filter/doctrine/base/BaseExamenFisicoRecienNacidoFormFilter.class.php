<?php

/**
 * ExamenFisicoRecienNacido filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExamenFisicoRecienNacidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'ap_paterno'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ap_materno'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_nacimiento'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'sexo'                 => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'peso_nacimiento'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'talla'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'circunferencia_torax' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_cuna'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_adminision'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_egreso'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'internado_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'ap_paterno'           => new sfValidatorPass(array('required' => false)),
      'ap_materno'           => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'sexo'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'peso_nacimiento'      => new sfValidatorPass(array('required' => false)),
      'talla'                => new sfValidatorPass(array('required' => false)),
      'circunferencia_torax' => new sfValidatorPass(array('required' => false)),
      'numero_cuna'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_adminision'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_egreso'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('examen_fisico_recien_nacido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExamenFisicoRecienNacido';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'internado_id'         => 'ForeignKey',
      'ap_paterno'           => 'Text',
      'ap_materno'           => 'Text',
      'fecha_nacimiento'     => 'Date',
      'sexo'                 => 'Boolean',
      'peso_nacimiento'      => 'Text',
      'talla'                => 'Text',
      'circunferencia_torax' => 'Text',
      'numero_cuna'          => 'Number',
      'fecha_adminision'     => 'Date',
      'fecha_egreso'         => 'Date',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
      'created_by'           => 'ForeignKey',
      'updated_by'           => 'ForeignKey',
    );
  }
}
