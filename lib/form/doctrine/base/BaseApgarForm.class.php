<?php

/**
 * Apgar form base class.
 *
 * @method Apgar getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseApgarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                             => new sfWidgetFormInputHidden(),
      'examen_fisico_recien_nacido_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ExamenFisicoRecienNacido'), 'add_empty' => false)),
      'nacer_egresar'                  => new sfWidgetFormInputCheckbox(),
      'apariencia'                     => new sfWidgetFormInputText(),
      'piel'                           => new sfWidgetFormInputText(),
      'cabeza'                         => new sfWidgetFormInputText(),
      'ojos'                           => new sfWidgetFormInputText(),
      'oidos_nariz_garganta'           => new sfWidgetFormInputText(),
      'torax'                          => new sfWidgetFormInputText(),
      'pulmones'                       => new sfWidgetFormInputText(),
      'corazon'                        => new sfWidgetFormInputText(),
      'abdomen'                        => new sfWidgetFormInputText(),
      'genitales'                      => new sfWidgetFormInputText(),
      'torso_espina'                   => new sfWidgetFormInputText(),
      'extremidades'                   => new sfWidgetFormInputText(),
      'reflejos'                       => new sfWidgetFormInputText(),
      'ano'                            => new sfWidgetFormInputText(),
      'created_at'                     => new sfWidgetFormDateTime(),
      'updated_at'                     => new sfWidgetFormDateTime(),
      'created_by'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'examen_fisico_recien_nacido_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ExamenFisicoRecienNacido'))),
      'nacer_egresar'                  => new sfValidatorBoolean(),
      'apariencia'                     => new sfValidatorString(array('max_length' => 100)),
      'piel'                           => new sfValidatorString(array('max_length' => 100)),
      'cabeza'                         => new sfValidatorString(array('max_length' => 100)),
      'ojos'                           => new sfValidatorString(array('max_length' => 100)),
      'oidos_nariz_garganta'           => new sfValidatorString(array('max_length' => 100)),
      'torax'                          => new sfValidatorString(array('max_length' => 100)),
      'pulmones'                       => new sfValidatorString(array('max_length' => 100)),
      'corazon'                        => new sfValidatorString(array('max_length' => 100)),
      'abdomen'                        => new sfValidatorString(array('max_length' => 100)),
      'genitales'                      => new sfValidatorString(array('max_length' => 100)),
      'torso_espina'                   => new sfValidatorString(array('max_length' => 100)),
      'extremidades'                   => new sfValidatorString(array('max_length' => 100)),
      'reflejos'                       => new sfValidatorString(array('max_length' => 100)),
      'ano'                            => new sfValidatorString(array('max_length' => 100)),
      'created_at'                     => new sfValidatorDateTime(),
      'updated_at'                     => new sfValidatorDateTime(),
      'created_by'                     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'                     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('apgar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Apgar';
  }

}
