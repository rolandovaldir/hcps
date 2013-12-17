<?php

/**
 * MedicoParticular form base class.
 *
 * @method MedicoParticular getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedicoParticularForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'junta_medica_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JuntaMedica'), 'add_empty' => false)),
      'nombre'          => new sfWidgetFormInputText(),
      'created_at'      => new myWidgetFormDojoDateTime(),
      'updated_at'      => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'junta_medica_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('JuntaMedica'))),
      'nombre'          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'created_at'      => new myValidatorDojoDateTime(),
      'updated_at'      => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('medico_particular[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedicoParticular';
  }

}
