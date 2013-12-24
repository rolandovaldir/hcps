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
      'fecha_nacimiento'     => new myWidgetFormDojoDate(),
      'sexo'                 => new sfWidgetFormInputText(),
      'peso_nacimiento'      => new sfWidgetFormInputText(),
      'talla'                => new sfWidgetFormInputText(),
      'circunferencia_torax' => new sfWidgetFormInputText(),
      'numero_cuna'          => new myWidgetFormDojoInteger(),
      'fecha_adminision'     => new myWidgetFormDojoDate(),
      'fecha_egreso'         => new myWidgetFormDojoDate(),
      'created_at'           => new myWidgetFormDojoDateTime(),
      'updated_at'           => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'ap_paterno'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ap_materno'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'     => new myValidatorDojoDate(array('required' => false)),
      'sexo'                 => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'peso_nacimiento'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'talla'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'circunferencia_torax' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'numero_cuna'          => new sfValidatorInteger(array('required' => false)),
      'fecha_adminision'     => new myValidatorDojoDate(array('required' => false)),
      'fecha_egreso'         => new myValidatorDojoDate(array('required' => false)),
      'created_at'           => new myValidatorDojoDateTime(),
      'updated_at'           => new myValidatorDojoDateTime(),
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
