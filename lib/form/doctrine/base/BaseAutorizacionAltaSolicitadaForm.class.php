<?php

/**
 * AutorizacionAltaSolicitada form base class.
 *
 * @method AutorizacionAltaSolicitada getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAutorizacionAltaSolicitadaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'internado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'nombre_familiar' => new sfWidgetFormInputText(),
      'ci_familiar'     => new sfWidgetFormInputText(),
      'fecha_hora'      => new myWidgetFormDojoDateTime(),
      'created_at'      => new myWidgetFormDojoDateTime(),
      'updated_at'      => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'nombre_familiar' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ci_familiar'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fecha_hora'      => new myValidatorDojoDateTime(array('required' => false)),
      'created_at'      => new myValidatorDojoDateTime(),
      'updated_at'      => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('autorizacion_alta_solicitada[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AutorizacionAltaSolicitada';
  }

}
