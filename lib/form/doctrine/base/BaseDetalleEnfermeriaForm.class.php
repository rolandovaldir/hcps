<?php

/**
 * DetalleEnfermeria form base class.
 *
 * @method DetalleEnfermeria getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleEnfermeriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'notas_enfermeria_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NotasEnfermeria'), 'add_empty' => false)),
      'fecha'               => new myWidgetFormDojoDate(),
      'hora'                => new sfWidgetFormTime(),
      'procedimientos'      => new sfWidgetFormInputText(),
      'observaciones'       => new sfWidgetFormTextarea(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'notas_enfermeria_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NotasEnfermeria'))),
      'fecha'               => new sfValidatorDate(array('required' => false)),
      'hora'                => new sfValidatorTime(array('required' => false)),
      'procedimientos'      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'observaciones'       => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_enfermeria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleEnfermeria';
  }

}
