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
      'apariencia'                     => new sfWidgetFormTextarea(),
      'piel'                           => new sfWidgetFormTextarea(),
      'cabeza'                         => new sfWidgetFormTextarea(),
      'ojos'                           => new sfWidgetFormTextarea(),
      'oidos_nariz_garganta'           => new sfWidgetFormTextarea(),
      'torax'                          => new sfWidgetFormTextarea(),
      'pulmones'                       => new sfWidgetFormTextarea(),
      'corazon'                        => new sfWidgetFormTextarea(),
      'abdomen'                        => new sfWidgetFormTextarea(),
      'genitales'                      => new sfWidgetFormTextarea(),
      'torso_espina'                   => new sfWidgetFormTextarea(),
      'extremidades'                   => new sfWidgetFormTextarea(),
      'reflejos'                       => new sfWidgetFormTextarea(),
      'ano'                            => new sfWidgetFormTextarea(),
      'created_at'                     => new myWidgetFormDojoDateTime(),
      'updated_at'                     => new myWidgetFormDojoDateTime(),
      'created_by'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'examen_fisico_recien_nacido_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ExamenFisicoRecienNacido'))),
      'nacer_egresar'                  => new sfValidatorBoolean(),
      'apariencia'                     => new sfValidatorString(array('max_length' => 200)),
      'piel'                           => new sfValidatorString(array('max_length' => 200)),
      'cabeza'                         => new sfValidatorString(array('max_length' => 200)),
      'ojos'                           => new sfValidatorString(array('max_length' => 200)),
      'oidos_nariz_garganta'           => new sfValidatorString(array('max_length' => 200)),
      'torax'                          => new sfValidatorString(array('max_length' => 200)),
      'pulmones'                       => new sfValidatorString(array('max_length' => 200)),
      'corazon'                        => new sfValidatorString(array('max_length' => 200)),
      'abdomen'                        => new sfValidatorString(array('max_length' => 200)),
      'genitales'                      => new sfValidatorString(array('max_length' => 200)),
      'torso_espina'                   => new sfValidatorString(array('max_length' => 200)),
      'extremidades'                   => new sfValidatorString(array('max_length' => 200)),
      'reflejos'                       => new sfValidatorString(array('max_length' => 200)),
      'ano'                            => new sfValidatorString(array('max_length' => 200)),
      'created_at'                     => new myValidatorDojoDateTime(),
      'updated_at'                     => new myValidatorDojoDateTime(),
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
