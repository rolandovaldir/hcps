<?php

/**
 * ProgramacionCirugia filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProgramacionCirugiaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'medico_id'                 => new sfWidgetFormFilterInput(),
      'operacion_fecha'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'operacion_hora'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diagnostico_preoperatorio' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tratamiento_quirurgico'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anestesia'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'otros'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'examenes_auxiliares'       => new sfWidgetFormFilterInput(),
      'fecha'                     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'enfermera_id'              => new sfWidgetFormFilterInput(),
      'enviado'                   => new sfWidgetFormFilterInput(),
      'recibido'                  => new sfWidgetFormFilterInput(),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'internado_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'medico_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'operacion_fecha'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'operacion_hora'            => new sfValidatorPass(array('required' => false)),
      'diagnostico_preoperatorio' => new sfValidatorPass(array('required' => false)),
      'tratamiento_quirurgico'    => new sfValidatorPass(array('required' => false)),
      'anestesia'                 => new sfValidatorPass(array('required' => false)),
      'otros'                     => new sfValidatorPass(array('required' => false)),
      'examenes_auxiliares'       => new sfValidatorPass(array('required' => false)),
      'fecha'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'enfermera_id'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'enviado'                   => new sfValidatorPass(array('required' => false)),
      'recibido'                  => new sfValidatorPass(array('required' => false)),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('programacion_cirugia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProgramacionCirugia';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'internado_id'              => 'ForeignKey',
      'medico_id'                 => 'Number',
      'operacion_fecha'           => 'Date',
      'operacion_hora'            => 'Text',
      'diagnostico_preoperatorio' => 'Text',
      'tratamiento_quirurgico'    => 'Text',
      'anestesia'                 => 'Text',
      'otros'                     => 'Text',
      'examenes_auxiliares'       => 'Text',
      'fecha'                     => 'Date',
      'enfermera_id'              => 'Number',
      'enviado'                   => 'Text',
      'recibido'                  => 'Text',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
      'created_by'                => 'ForeignKey',
      'updated_by'                => 'ForeignKey',
    );
  }
}
