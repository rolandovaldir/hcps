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
      'created_at'                     => new myWidgetFormDojoDateTime(),
      'updated_at'                     => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'examen_fisico_recien_nacido_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ExamenFisicoRecienNacido'))),
      'nacer_egresar'                  => new sfValidatorBoolean(array('required' => false)),
      'apariencia'                     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'piel'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cabeza'                         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ojos'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'oidos_nariz_garganta'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'torax'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pulmones'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'corazon'                        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'abdomen'                        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'genitales'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'torso_espina'                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'extremidades'                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'reflejos'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ano'                            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at'                     => new sfValidatorDateTime(),
      'updated_at'                     => new sfValidatorDateTime(),
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
