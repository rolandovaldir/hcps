<?php

/**
 * SolicitudExamenLaboratorio filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSolicitudExamenLaboratorioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'file_internacion_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => true)),
      'doctor_id'              => new sfWidgetFormFilterInput(),
      'material_enviado'       => new sfWidgetFormFilterInput(),
      'otros_examenes'         => new sfWidgetFormFilterInput(),
      'diagnostico_presuntivo' => new sfWidgetFormFilterInput(),
      'medico_id'              => new sfWidgetFormFilterInput(),
      'lugar'                  => new sfWidgetFormFilterInput(),
      'fecha'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'file_internacion_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FileInternacion'), 'column' => 'id')),
      'doctor_id'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'material_enviado'       => new sfValidatorPass(array('required' => false)),
      'otros_examenes'         => new sfValidatorPass(array('required' => false)),
      'diagnostico_presuntivo' => new sfValidatorPass(array('required' => false)),
      'medico_id'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lugar'                  => new sfValidatorPass(array('required' => false)),
      'fecha'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('solicitud_examen_laboratorio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SolicitudExamenLaboratorio';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'file_internacion_id'    => 'ForeignKey',
      'doctor_id'              => 'Number',
      'material_enviado'       => 'Text',
      'otros_examenes'         => 'Text',
      'diagnostico_presuntivo' => 'Text',
      'medico_id'              => 'Number',
      'lugar'                  => 'Text',
      'fecha'                  => 'Date',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
    );
  }
}
