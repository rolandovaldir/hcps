<?php

/**
 * ServicioMantenimiento filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseServicioMantenimientoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'file_internacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => true)),
      'solicitante'         => new sfWidgetFormFilterInput(),
      'sector'              => new sfWidgetFormFilterInput(),
      'fecha_solicitante'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'objeto_reparado'     => new sfWidgetFormFilterInput(),
      'caracteristicas'     => new sfWidgetFormFilterInput(),
      'trabajo_solicitado'  => new sfWidgetFormFilterInput(),
      'conformidad'         => new sfWidgetFormFilterInput(),
      'reparado_por'        => new sfWidgetFormFilterInput(),
      'importe'             => new sfWidgetFormFilterInput(),
      'importe_fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'file_internacion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FileInternacion'), 'column' => 'id')),
      'solicitante'         => new sfValidatorPass(array('required' => false)),
      'sector'              => new sfValidatorPass(array('required' => false)),
      'fecha_solicitante'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'objeto_reparado'     => new sfValidatorPass(array('required' => false)),
      'caracteristicas'     => new sfValidatorPass(array('required' => false)),
      'trabajo_solicitado'  => new sfValidatorPass(array('required' => false)),
      'conformidad'         => new sfValidatorPass(array('required' => false)),
      'reparado_por'        => new sfValidatorPass(array('required' => false)),
      'importe'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'importe_fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('servicio_mantenimiento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServicioMantenimiento';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'file_internacion_id' => 'ForeignKey',
      'solicitante'         => 'Text',
      'sector'              => 'Text',
      'fecha_solicitante'   => 'Date',
      'objeto_reparado'     => 'Text',
      'caracteristicas'     => 'Text',
      'trabajo_solicitado'  => 'Text',
      'conformidad'         => 'Text',
      'reparado_por'        => 'Text',
      'importe'             => 'Number',
      'importe_fecha'       => 'Date',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
