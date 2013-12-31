<?php

/**
 * Planta form base class.
 *
 * @method Planta getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePlantaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'filial_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Filial'), 'add_empty' => false)),
      'nombre'        => new sfWidgetFormInputText(),
      'descripcion'   => new sfWidgetFormInputText(),
      'observaciones' => new sfWidgetFormInputText(),
      'codigo'        => new sfWidgetFormInputText(),
      'plano'         => new sfWidgetFormInputText(),
      'numero'        => new myWidgetFormDojoInteger(),
      'created_at'    => new myWidgetFormDojoDateTime(),
      'updated_at'    => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'filial_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Filial'))),
      'nombre'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'descripcion'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'observaciones' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'codigo'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'plano'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'numero'        => new sfValidatorInteger(array('required' => false)),
      'created_at'    => new myValidatorDojoDateTime(),
      'updated_at'    => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('planta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Planta';
  }

}
