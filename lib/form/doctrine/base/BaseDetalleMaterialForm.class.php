<?php

/**
 * DetalleMaterial form base class.
 *
 * @method DetalleMaterial getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleMaterialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                               => new sfWidgetFormInputHidden(),
      'solicitud_reposicion_material_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudReposicionMaterial'), 'add_empty' => false)),
      'codigo'                           => new sfWidgetFormInputText(),
      'descripcion'                      => new sfWidgetFormInputText(),
      'unidad'                           => new sfWidgetFormInputText(),
      'saldo_anterior'                   => new myWidgetFormDojoInteger(),
      'reposicion_solicitada'            => new myWidgetFormDojoInteger(),
      'saldo_actual'                     => new myWidgetFormDojoInteger(),
      'created_at'                       => new myWidgetFormDojoDateTime(),
      'updated_at'                       => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'solicitud_reposicion_material_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudReposicionMaterial'))),
      'codigo'                           => new sfValidatorString(array('max_length' => 45)),
      'descripcion'                      => new sfValidatorString(array('max_length' => 100)),
      'unidad'                           => new sfValidatorString(array('max_length' => 10)),
      'saldo_anterior'                   => new sfValidatorInteger(),
      'reposicion_solicitada'            => new sfValidatorInteger(),
      'saldo_actual'                     => new sfValidatorInteger(),
      'created_at'                       => new myValidatorDojoDateTime(),
      'updated_at'                       => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_material[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleMaterial';
  }

}
