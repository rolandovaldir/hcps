<?php

/**
 * Especialidad form base class.
 *
 * @method Especialidad getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEspecialidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'activo'      => new sfWidgetFormInputText(),
      'cupos'       => new sfWidgetFormInputText(),
      'servicio_id' => new sfWidgetFormInputText(),
      'filial_id'   => new sfWidgetFormInputText(),
      'observacion' => new sfWidgetFormTextarea(),
      'created_at'  => new myWidgetFormDojoDateTime(),
      'updated_at'  => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 50)),
      'activo'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cupos'       => new sfValidatorInteger(array('required' => false)),
      'servicio_id' => new sfValidatorInteger(),
      'filial_id'   => new sfValidatorInteger(array('required' => false)),
      'observacion' => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'created_at'  => new myValidatorDojoDateTime(),
      'updated_at'  => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('especialidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Especialidad';
  }

}
