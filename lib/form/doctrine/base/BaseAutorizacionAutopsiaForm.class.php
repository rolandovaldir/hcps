<?php

/**
 * AutorizacionAutopsia form base class.
 *
 * @method AutorizacionAutopsia getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAutorizacionAutopsiaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'internado_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'nombre_familiar1' => new sfWidgetFormInputText(),
      'tipo_parentesco1' => new sfWidgetFormInputText(),
      'ci_familiar1'     => new sfWidgetFormInputText(),
      'nombre_familiar2' => new sfWidgetFormInputText(),
      'tipo_parentesco2' => new sfWidgetFormInputText(),
      'ci_familiar2'     => new sfWidgetFormInputText(),
      'nombre_familiar3' => new sfWidgetFormInputText(),
      'tipo_parentesco3' => new sfWidgetFormInputText(),
      'ci_familiar3'     => new sfWidgetFormInputText(),
      'fecha_hora'       => new myWidgetFormDojoDateTime(),
      'created_at'       => new myWidgetFormDojoDateTime(),
      'updated_at'       => new myWidgetFormDojoDateTime(),
      'created_by'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'tipo_borrado'     => new sfWidgetFormInputText(),
      'motivo_borrado'   => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'nombre_familiar1' => new sfValidatorString(array('max_length' => 100)),
      'tipo_parentesco1' => new sfValidatorString(array('max_length' => 30)),
      'ci_familiar1'     => new sfValidatorString(array('max_length' => 10)),
      'nombre_familiar2' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tipo_parentesco2' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'ci_familiar2'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nombre_familiar3' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tipo_parentesco3' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'ci_familiar3'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fecha_hora'       => new myValidatorDojoDateTime(),
      'created_at'       => new myValidatorDojoDateTime(),
      'updated_at'       => new myValidatorDojoDateTime(),
      'created_by'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
      'tipo_borrado'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'motivo_borrado'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('autorizacion_autopsia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AutorizacionAutopsia';
  }

}
