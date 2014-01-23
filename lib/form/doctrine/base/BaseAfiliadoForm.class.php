<?php

/**
 * Afiliado form base class.
 *
 * @method Afiliado getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAfiliadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'matricula'  => new sfWidgetFormInputText(),
      'paterno'    => new sfWidgetFormInputText(),
      'materno'    => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'hclinica'   => new sfWidgetFormInputText(),
      'empresa'    => new sfWidgetFormTextarea(),
      'tafiliado'  => new sfWidgetFormInputText(),
      'activo'     => new sfWidgetFormInputText(),
      'grupofam'   => new sfWidgetFormInputText(),
      'created_at' => new myWidgetFormDojoDateTime(),
      'updated_at' => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'matricula'  => new sfValidatorString(array('max_length' => 12)),
      'paterno'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'materno'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 12)),
      'hclinica'   => new sfValidatorString(array('max_length' => 12)),
      'empresa'    => new sfValidatorString(array('max_length' => 255)),
      'tafiliado'  => new sfValidatorString(array('max_length' => 12)),
      'activo'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'grupofam'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'created_at' => new myValidatorDojoDateTime(),
      'updated_at' => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('afiliado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Afiliado';
  }

}
