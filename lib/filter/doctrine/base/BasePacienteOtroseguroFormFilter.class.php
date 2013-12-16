<?php

/**
 * PacienteOtroseguro filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePacienteOtroseguroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paterno'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'materno'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'casada'          => new sfWidgetFormFilterInput(),
      'fechaNacimiento' => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
      'sexo'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ci'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'exp'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'domicilio'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'        => new sfWidgetFormFilterInput(),
      'celular'         => new sfWidgetFormFilterInput(),
      'email'           => new sfWidgetFormFilterInput(),
      'hclinica'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ocupacion'       => new sfWidgetFormFilterInput(),
      'departamento'    => new sfWidgetFormFilterInput(),
      'ciudad'          => new sfWidgetFormFilterInput(),
      'provincia'       => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'          => new sfValidatorPass(array('required' => false)),
      'paterno'         => new sfValidatorPass(array('required' => false)),
      'materno'         => new sfValidatorPass(array('required' => false)),
      'casada'          => new sfValidatorPass(array('required' => false)),
      'fechaNacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'sexo'            => new sfValidatorPass(array('required' => false)),
      'ci'              => new sfValidatorPass(array('required' => false)),
      'exp'             => new sfValidatorPass(array('required' => false)),
      'domicilio'       => new sfValidatorPass(array('required' => false)),
      'telefono'        => new sfValidatorPass(array('required' => false)),
      'celular'         => new sfValidatorPass(array('required' => false)),
      'email'           => new sfValidatorPass(array('required' => false)),
      'hclinica'        => new sfValidatorPass(array('required' => false)),
      'ocupacion'       => new sfValidatorPass(array('required' => false)),
      'departamento'    => new sfValidatorPass(array('required' => false)),
      'ciudad'          => new sfValidatorPass(array('required' => false)),
      'provincia'       => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('paciente_otroseguro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PacienteOtroseguro';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'nombre'          => 'Text',
      'paterno'         => 'Text',
      'materno'         => 'Text',
      'casada'          => 'Text',
      'fechaNacimiento' => 'Date',
      'sexo'            => 'Text',
      'ci'              => 'Text',
      'exp'             => 'Text',
      'domicilio'       => 'Text',
      'telefono'        => 'Text',
      'celular'         => 'Text',
      'email'           => 'Text',
      'hclinica'        => 'Text',
      'ocupacion'       => 'Text',
      'departamento'    => 'Text',
      'ciudad'          => 'Text',
      'provincia'       => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
