<?php

/**
 * PapeletaPedidoMaterial form base class.
 *
 * @method PapeletaPedidoMaterial getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePapeletaPedidoMaterialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'internado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'enfermera_id'    => new sfWidgetFormInputText(),
      'fecha_solicitud' => new sfWidgetFormDate(),
      'numero'          => new sfWidgetFormInputText(),
      'detalle'         => new sfWidgetFormInputText(),
      'cantidad'        => new sfWidgetFormInputText(),
      'entregado'       => new sfWidgetFormInputCheckbox(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'required' => false)),
      'enfermera_id'    => new sfValidatorInteger(array('required' => false)),
      'fecha_solicitud' => new sfValidatorDate(array('required' => false)),
      'numero'          => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'detalle'         => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'cantidad'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'entregado'       => new sfValidatorBoolean(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('papeleta_pedido_material[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PapeletaPedidoMaterial';
  }

}
