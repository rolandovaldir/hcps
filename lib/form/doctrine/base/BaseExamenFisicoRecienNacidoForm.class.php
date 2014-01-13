<?php

/**
 * ExamenFisicoRecienNacido form base class.
 *
 * @method ExamenFisicoRecienNacido getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExamenFisicoRecienNacidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'internado_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'ap_paterno'           => new sfWidgetFormInputText(),
      'ap_materno'           => new sfWidgetFormInputText(),
      'fecha_nacimiento'     => new sfWidgetFormDate(),
      'sexo'                 => new sfWidgetFormInputCheckbox(),
      'peso_nacimiento'      => new sfWidgetFormInputText(),
      'talla'                => new sfWidgetFormInputText(),
      'circunferencia_torax' => new sfWidgetFormInputText(),
      'numero_cuna'          => new sfWidgetFormInputText(),
      'fecha_adminision'     => new sfWidgetFormDate(),
      'fecha_egreso'         => new sfWidgetFormDate(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'ap_paterno'           => new sfValidatorString(array('max_length' => 45)),
      'ap_materno'           => new sfValidatorString(array('max_length' => 45)),
      'fecha_nacimiento'     => new sfValidatorDate(),
      'sexo'                 => new sfValidatorBoolean(),
      'peso_nacimiento'      => new sfValidatorString(array('max_length' => 45)),
      'talla'                => new sfValidatorString(array('max_length' => 45)),
      'circunferencia_torax' => new sfValidatorString(array('max_length' => 20)),
      'numero_cuna'          => new sfValidatorInteger(),
      'fecha_adminision'     => new sfValidatorDate(array('required' => false)),
      'fecha_egreso'         => new sfValidatorDate(array('required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'created_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('examen_fisico_recien_nacido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExamenFisicoRecienNacido';
  }

}
