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
      'internado_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'medico_solicitante'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'servicio'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'especialidades'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_junta'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'diagnostico_establecido' => new sfWidgetFormFilterInput(),
      'relacion_junta'          => new sfWidgetFormFilterInput(),
      'conclusiones'            => new sfWidgetFormFilterInput(),
      'tac'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'contraste'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'internado_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
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
      'created_by'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
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
      'internado_id'            => 'ForeignKey',
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
      'created_by'              => 'ForeignKey',
      'updated_by'              => 'ForeignKey',
    );
  }
}
