<?php

/**
 * Filial form base class.
 *
 * @method Filial getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFilialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'nombre'        => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'telefono'      => new sfWidgetFormInputText(),
      'telefono2'     => new sfWidgetFormInputText(),
      'telefono3'     => new sfWidgetFormInputText(),
      'descripcion'   => new sfWidgetFormInputText(),
      'codigo'        => new sfWidgetFormInputText(),
      'geoubicacion'  => new sfWidgetFormTextarea(),
      'geoubicacion2' => new sfWidgetFormTextarea(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'        => new sfValidatorString(array('max_length' => 100)),
      'direccion'     => new sfValidatorString(array('max_length' => 250)),
      'telefono'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'telefono2'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'telefono3'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'descripcion'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'codigo'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'geoubicacion'  => new sfValidatorString(array('max_length' => 600, 'required' => false)),
      'geoubicacion2' => new sfValidatorString(array('max_length' => 600, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('filial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Filial';
  }

}
