<?php

/**
 * DetallePapeletaPedidoMaterial form base class.
 *
 * @method DetallePapeletaPedidoMaterial getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetallePapeletaPedidoMaterialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                          => new sfWidgetFormInputHidden(),
      'papeleta_pedido_material_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PapeletaPedidoMaterial'), 'add_empty' => false)),
      'columna1'                    => new sfWidgetFormInputText(),
      'columna2'                    => new sfWidgetFormInputText(),
      'columna3'                    => new sfWidgetFormInputText(),
      'created_at'                  => new myWidgetFormDojoDateTime(),
      'updated_at'                  => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'papeleta_pedido_material_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PapeletaPedidoMaterial'))),
      'columna1'                    => new sfValidatorString(array('max_length' => 15)),
      'columna2'                    => new sfValidatorString(array('max_length' => 150)),
      'columna3'                    => new sfValidatorString(array('max_length' => 25)),
      'created_at'                  => new myValidatorDojoDateTime(),
      'updated_at'                  => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_papeleta_pedido_material[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetallePapeletaPedidoMaterial';
  }

}
