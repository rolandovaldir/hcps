<?php

/**
 * PacienteOtroseguro form base class.
 *
 * @method PacienteOtroseguro getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePacienteOtroseguroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'nombre'          => new sfWidgetFormInputText(),
      'paterno'         => new sfWidgetFormInputText(),
      'materno'         => new sfWidgetFormInputText(),
      'casada'          => new sfWidgetFormInputText(),
      'fechaNacimiento' => new sfWidgetFormDate(),
      'sexo'            => new sfWidgetFormInputText(),
      'ci'              => new sfWidgetFormInputText(),
      'exp'             => new sfWidgetFormInputText(),
      'domicilio'       => new sfWidgetFormInputText(),
      'telefono'        => new sfWidgetFormInputText(),
      'celular'         => new sfWidgetFormInputText(),
      'email'           => new sfWidgetFormInputText(),
      'hclinica'        => new sfWidgetFormInputText(),
      'ocupacion'       => new sfWidgetFormInputText(),
      'departamento'    => new sfWidgetFormInputText(),
      'ciudad'          => new sfWidgetFormInputText(),
      'provincia'       => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'          => new sfValidatorString(array('max_length' => 50)),
      'paterno'         => new sfValidatorString(array('max_length' => 50)),
      'materno'         => new sfValidatorString(array('max_length' => 50)),
      'casada'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fechaNacimiento' => new sfValidatorDate(),
      'sexo'            => new sfValidatorString(array('max_length' => 10)),
      'ci'              => new sfValidatorString(array('max_length' => 20)),
      'exp'             => new sfValidatorString(array('max_length' => 10)),
      'domicilio'       => new sfValidatorString(array('max_length' => 150)),
      'telefono'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'celular'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'           => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'hclinica'        => new sfValidatorString(array('max_length' => 12)),
      'ocupacion'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'departamento'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ciudad'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'provincia'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'PacienteOtroseguro', 'column' => array('ci')))
    );

    $this->widgetSchema->setNameFormat('paciente_otroseguro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PacienteOtroseguro';
  }

}
