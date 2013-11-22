<?php

/**
 * SolicitudExamenLaboratorio form base class.
 *
 * @method SolicitudExamenLaboratorio getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSolicitudExamenLaboratorioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'file_internacion_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => false)),
      'doctor_id'              => new sfWidgetFormInputText(),
      'material_enviado'       => new sfWidgetFormInputText(),
      'otros_examenes'         => new sfWidgetFormInputText(),
      'diagnostico_presuntivo' => new sfWidgetFormInputText(),
      'medico_id'              => new sfWidgetFormInputText(),
      'lugar'                  => new sfWidgetFormInputText(),
      'fecha'                  => new sfWidgetFormDate(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'file_internacion_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'))),
      'doctor_id'              => new sfValidatorInteger(array('required' => false)),
      'material_enviado'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'otros_examenes'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'diagnostico_presuntivo' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'medico_id'              => new sfValidatorInteger(array('required' => false)),
      'lugar'                  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha'                  => new sfValidatorDate(array('required' => false)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('solicitud_examen_laboratorio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SolicitudExamenLaboratorio';
  }

}
