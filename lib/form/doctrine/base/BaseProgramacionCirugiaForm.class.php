<?php

/**
 * ProgramacionCirugia form base class.
 *
 * @method ProgramacionCirugia getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProgramacionCirugiaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'file_internacion_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => false)),
      'medico_id'                 => new sfWidgetFormInputText(),
      'operacion_fecha'           => new sfWidgetFormDate(),
      'operacion_hora'            => new sfWidgetFormTime(),
      'diagnostico_preoperatorio' => new sfWidgetFormInputText(),
      'tratamiento_quirurgico'    => new sfWidgetFormInputText(),
      'anestesia'                 => new sfWidgetFormInputText(),
      'otros'                     => new sfWidgetFormInputText(),
      'examenes_auxiliares'       => new sfWidgetFormInputText(),
      'fecha'                     => new sfWidgetFormDate(),
      'enfermera_id'              => new sfWidgetFormInputText(),
      'enviado'                   => new sfWidgetFormInputText(),
      'recibido'                  => new sfWidgetFormInputText(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'file_internacion_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'))),
      'medico_id'                 => new sfValidatorInteger(array('required' => false)),
      'operacion_fecha'           => new sfValidatorDate(array('required' => false)),
      'operacion_hora'            => new sfValidatorTime(array('required' => false)),
      'diagnostico_preoperatorio' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'tratamiento_quirurgico'    => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'anestesia'                 => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'otros'                     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'examenes_auxiliares'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fecha'                     => new sfValidatorDate(array('required' => false)),
      'enfermera_id'              => new sfValidatorInteger(array('required' => false)),
      'enviado'                   => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'recibido'                  => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('programacion_cirugia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProgramacionCirugia';
  }

}
