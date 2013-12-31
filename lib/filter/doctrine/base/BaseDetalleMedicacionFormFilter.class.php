<?php

/**
 * DetalleMedicacion filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDetalleMedicacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'solicitud_interconsulta_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudInterconsulta'), 'add_empty' => true)),
      'medicacion_utilizada'       => new sfWidgetFormFilterInput(),
      'dosis'                      => new sfWidgetFormFilterInput(),
      'fecha_inicio'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'solicitud_interconsulta_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SolicitudInterconsulta'), 'column' => 'id')),
      'medicacion_utilizada'       => new sfValidatorPass(array('required' => false)),
      'dosis'                      => new sfValidatorPass(array('required' => false)),
      'fecha_inicio'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('detalle_medicacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleMedicacion';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'solicitud_interconsulta_id' => 'ForeignKey',
      'medicacion_utilizada'       => 'Text',
      'dosis'                      => 'Text',
      'fecha_inicio'               => 'Date',
      'created_at'                 => 'Date',
      'updated_at'                 => 'Date',
    );
  }
}
