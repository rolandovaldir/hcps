<?php

/**
 * Empleado form base class.
 *
 * @method Empleado getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpleadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'matricula'       => new sfWidgetFormInputText(),
      'profesion'       => new sfWidgetFormInputText(),
      'centro_salud_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Filial'), 'add_empty' => false)),
      'nombre'          => new sfWidgetFormInputText(),
      'apellido'        => new sfWidgetFormInputText(),
      'cargo'           => new sfWidgetFormInputText(),
      'created_at'      => new myWidgetFormDojoDateTime(),
      'updated_at'      => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'matricula'       => new sfValidatorString(array('max_length' => 20)),
      'profesion'       => new sfValidatorString(array('max_length' => 200)),
      'centro_salud_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Filial'))),
      'nombre'          => new sfValidatorString(array('max_length' => 45)),
      'apellido'        => new sfValidatorString(array('max_length' => 45)),
      'cargo'           => new sfValidatorString(array('max_length' => 45)),
      'created_at'      => new myValidatorDojoDateTime(),
      'updated_at'      => new myValidatorDojoDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Empleado', 'column' => array('matricula')))
    );

    $this->widgetSchema->setNameFormat('empleado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empleado';
  }

}
