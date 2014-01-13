<?php

/**
 * JuntaMedica form base class.
 *
 * @method JuntaMedica getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJuntaMedicaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'internado_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'medico_solicitante'      => new sfWidgetFormInputText(),
      'servicio'                => new sfWidgetFormInputText(),
      'especialidades'          => new sfWidgetFormInputText(),
      'fecha_junta'             => new sfWidgetFormDate(),
      'diagnostico_establecido' => new sfWidgetFormTextarea(),
      'relacion_junta'          => new sfWidgetFormTextarea(),
      'conclusiones'            => new sfWidgetFormTextarea(),
      'tac'                     => new sfWidgetFormInputCheckbox(),
      'contraste'               => new sfWidgetFormInputCheckbox(),
      'created_at'              => new sfWidgetFormDateTime(),
      'updated_at'              => new sfWidgetFormDateTime(),
      'created_by'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'medico_solicitante'      => new sfValidatorString(array('max_length' => 100)),
      'servicio'                => new sfValidatorString(array('max_length' => 45)),
      'especialidades'          => new sfValidatorString(array('max_length' => 45)),
      'fecha_junta'             => new sfValidatorDate(),
      'diagnostico_establecido' => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'relacion_junta'          => new sfValidatorString(array('max_length' => 2500, 'required' => false)),
      'conclusiones'            => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'tac'                     => new sfValidatorBoolean(array('required' => false)),
      'contraste'               => new sfValidatorBoolean(array('required' => false)),
      'created_at'              => new sfValidatorDateTime(),
      'updated_at'              => new sfValidatorDateTime(),
      'created_by'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('junta_medica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JuntaMedica';
  }

}
