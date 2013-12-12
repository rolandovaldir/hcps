<?php

/**
 * DetalleUsoHospitalario form base class.
 *
 * @method DetalleUsoHospitalario getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleUsoHospitalarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'uso_hospitalario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsoHospitalario'), 'add_empty' => false)),
      'codigo_cbm'          => new sfWidgetFormInputText(),
      'detalle'             => new sfWidgetFormInputText(),
      'cantidad'            => new sfWidgetFormInputText(),
      'unidad'              => new sfWidgetFormInputText(),
      'cod_farmacia_ibm'    => new sfWidgetFormInputText(),
      'created_at'          => new myWidgetFormDojoDateTime(),
      'updated_at'          => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'uso_hospitalario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsoHospitalario'))),
      'codigo_cbm'          => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'detalle'             => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'cantidad'            => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'unidad'              => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cod_farmacia_ibm'    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_uso_hospitalario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleUsoHospitalario';
  }

}
