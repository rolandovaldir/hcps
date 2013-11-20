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
      'file_internacion_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => true)),
      'ap_paterno'           => new sfWidgetFormFilterInput(),
      'ap_maperno'           => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'sexo'                 => new sfWidgetFormFilterInput(),
      'peso_nacimiento'      => new sfWidgetFormFilterInput(),
      'talla'                => new sfWidgetFormFilterInput(),
      'circunferencia_torax' => new sfWidgetFormFilterInput(),
      'numero_cuna'          => new sfWidgetFormFilterInput(),
      'fecha_adminision'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_egreso'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'file_internacion_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FileInternacion'), 'column' => 'id')),
      'ap_paterno'           => new sfValidatorPass(array('required' => false)),
      'ap_maperno'           => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'sexo'                 => new sfValidatorPass(array('required' => false)),
      'peso_nacimiento'      => new sfValidatorPass(array('required' => false)),
      'talla'                => new sfValidatorPass(array('required' => false)),
      'circunferencia_torax' => new sfValidatorPass(array('required' => false)),
      'numero_cuna'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_adminision'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_egreso'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'file_internacion_id'  => 'ForeignKey',
      'ap_paterno'           => 'Text',
      'ap_maperno'           => 'Text',
      'fecha_nacimiento'     => 'Date',
      'sexo'                 => 'Text',
      'peso_nacimiento'      => 'Text',
      'talla'                => 'Text',
      'circunferencia_torax' => 'Text',
      'numero_cuna'          => 'Number',
      'fecha_adminision'     => 'Date',
      'fecha_egreso'         => 'Date',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}
