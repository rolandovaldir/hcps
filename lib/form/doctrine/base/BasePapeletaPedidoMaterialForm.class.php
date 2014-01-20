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
      'internado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'enfermera_id'    => new myWidgetFormDojoInteger(),
      'fecha_solicitud' => new myWidgetFormDojoDate(),
      'entregado'       => new sfWidgetFormInputCheckbox(),
      'created_at'      => new myWidgetFormDojoDateTime(),
      'updated_at'      => new myWidgetFormDojoDateTime(),
      'created_by'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'enfermera_id'    => new sfValidatorInteger(array('required' => false)),
      'fecha_solicitud' => new myValidatorDojoDate(),
      'entregado'       => new sfValidatorBoolean(array('required' => false)),
      'created_at'      => new myValidatorDojoDateTime(),
      'updated_at'      => new myValidatorDojoDateTime(),
      'created_by'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
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
