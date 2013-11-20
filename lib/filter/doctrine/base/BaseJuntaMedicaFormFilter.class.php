<?php

/**
 * JuntaMedica filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJuntaMedicaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'file_internacion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => true)),
      'medico_solicitante'      => new sfWidgetFormFilterInput(),
      'servicio'                => new sfWidgetFormFilterInput(),
      'especialidades'          => new sfWidgetFormFilterInput(),
      'fecha_junta'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'diagnostico_establecido' => new sfWidgetFormFilterInput(),
      'relacion_junta'          => new sfWidgetFormFilterInput(),
      'conclusiones'            => new sfWidgetFormFilterInput(),
      'tac'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'contraste'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'file_internacion_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FileInternacion'), 'column' => 'id')),
      'medico_solicitante'      => new sfValidatorPass(array('required' => false)),
      'servicio'                => new sfValidatorPass(array('required' => false)),
      'especialidades'          => new sfValidatorPass(array('required' => false)),
      'fecha_junta'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'diagnostico_establecido' => new sfValidatorPass(array('required' => false)),
      'relacion_junta'          => new sfValidatorPass(array('required' => false)),
      'conclusiones'            => new sfValidatorPass(array('required' => false)),
      'tac'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'contraste'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('junta_medica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JuntaMedica';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'file_internacion_id'     => 'ForeignKey',
      'medico_solicitante'      => 'Text',
      'servicio'                => 'Text',
      'especialidades'          => 'Text',
      'fecha_junta'             => 'Date',
      'diagnostico_establecido' => 'Text',
      'relacion_junta'          => 'Text',
      'conclusiones'            => 'Text',
      'tac'                     => 'Boolean',
      'contraste'               => 'Boolean',
      'created_at'              => 'Date',
      'updated_at'              => 'Date',
    );
  }
}
