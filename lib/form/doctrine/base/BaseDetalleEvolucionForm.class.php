<?php

/**
 * DetalleEvolucion form base class.
 *
 * @method DetalleEvolucion getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleEvolucionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'notas_evolucion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NotasEvolucion'), 'add_empty' => false)),
      'fecha_hora'         => new sfWidgetFormDateTime(),
      'numero_prob'        => new sfWidgetFormInputText(),
      'nota_soap'          => new sfWidgetFormTextarea(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'notas_evolucion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NotasEvolucion'))),
      'fecha_hora'         => new sfValidatorDateTime(array('required' => false)),
      'numero_prob'        => new sfValidatorInteger(array('required' => false)),
      'nota_soap'          => new sfValidatorString(array('max_length' => 1500, 'required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_evolucion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleEvolucion';
  }

}
