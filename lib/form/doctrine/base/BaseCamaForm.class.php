<?php

/**
 * Cama form base class.
 *
 * @method Cama getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCamaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'pieza_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pieza'), 'add_empty' => false)),
      'codigo'        => new sfWidgetFormInputText(),
      'ocupada'       => new sfWidgetFormInputCheckbox(),
      'observaciones' => new sfWidgetFormTextarea(),
      'codigo_activo' => new sfWidgetFormInputText(),
      'activo_id'     => new myWidgetFormDojoInteger(),
      'created_at'    => new myWidgetFormDojoDateTime(),
      'updated_at'    => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'pieza_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pieza'))),
      'codigo'        => new sfValidatorString(array('max_length' => 4)),
      'ocupada'       => new sfValidatorBoolean(array('required' => false)),
      'observaciones' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'codigo_activo' => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'activo_id'     => new sfValidatorInteger(array('required' => false)),
      'created_at'    => new myValidatorDojoDateTime(),
      'updated_at'    => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('cama[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cama';
  }

}
