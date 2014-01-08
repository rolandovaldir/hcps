<?php

/**
 * NotasEnfermeria form base class.
 *
 * @method NotasEnfermeria getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNotasEnfermeriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'internado_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'fecha'          => new myWidgetFormDojoDate(),
      'hora'           => new myWidgetFormDojoTime(),
      'procedimientos' => new sfWidgetFormInputText(),
      'observaciones'  => new sfWidgetFormTextarea(),
      'created_at'     => new myWidgetFormDojoDateTime(),
      'updated_at'     => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'fecha'          => new myValidatorDojoDate(),
      'hora'           => new sfValidatorTime(),
      'procedimientos' => new sfValidatorString(array('max_length' => 150)),
      'observaciones'  => new sfValidatorString(array('max_length' => 500)),
      'created_at'     => new myValidatorDojoDateTime(),
      'updated_at'     => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('notas_enfermeria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasEnfermeria';
  }

}
