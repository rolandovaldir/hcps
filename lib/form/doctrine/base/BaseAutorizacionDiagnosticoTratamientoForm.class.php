<?php

/**
 * AutorizacionDiagnosticoTratamiento form base class.
 *
 * @method AutorizacionDiagnosticoTratamiento getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAutorizacionDiagnosticoTratamientoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'internado_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'nombre_familiar'  => new sfWidgetFormInputText(),
      'ci_familiar'      => new sfWidgetFormInputText(),
      'fecha_hora'       => new myWidgetFormDojoDateTime(),
      'created_at'       => new myWidgetFormDojoDateTime(),
      'updated_at'       => new myWidgetFormDojoDateTime(),
      'created_by'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'motivo_anulacion' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'nombre_familiar'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ci_familiar'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fecha_hora'       => new myValidatorDojoDateTime(array('required' => false)),
      'created_at'       => new myValidatorDojoDateTime(),
      'updated_at'       => new myValidatorDojoDateTime(),
      'created_by'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
      'motivo_anulacion' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('autorizacion_diagnostico_tratamiento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AutorizacionDiagnosticoTratamiento';
  }

}
