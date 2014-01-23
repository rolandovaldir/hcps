<?php

/**
 * Pieza form base class.
 *
 * @method Pieza getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePiezaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'planta_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Planta'), 'add_empty' => false)),
      'nombre'        => new sfWidgetFormInputText(),
      'codigo'        => new sfWidgetFormInputText(),
      'descripcion'   => new sfWidgetFormTextarea(),
      'observaciones' => new sfWidgetFormTextarea(),
      'plano'         => new sfWidgetFormTextarea(),
      'created_at'    => new myWidgetFormDojoDateTime(),
      'updated_at'    => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'planta_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Planta'))),
      'nombre'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'codigo'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'descripcion'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'observaciones' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'plano'         => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'created_at'    => new myValidatorDojoDateTime(),
      'updated_at'    => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('pieza[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pieza';
  }

}
