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
      'internado_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'doctor_id'              => new myWidgetFormDojoInteger(),
      'material_enviado'       => new sfWidgetFormInputText(),
      'otros_examenes'         => new sfWidgetFormInputText(),
      'diagnostico_presuntivo' => new sfWidgetFormInputText(),
      'medico_id'              => new myWidgetFormDojoInteger(),
      'lugar'                  => new sfWidgetFormInputText(),
      'fecha'                  => new myWidgetFormDojoDate(),
      'created_at'             => new myWidgetFormDojoDateTime(),
      'updated_at'             => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'doctor_id'              => new sfValidatorInteger(array('required' => false)),
      'material_enviado'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'otros_examenes'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'diagnostico_presuntivo' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'medico_id'              => new sfValidatorInteger(array('required' => false)),
      'lugar'                  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha'                  => new myValidatorDojoDate(array('required' => false)),
      'created_at'             => new myValidatorDojoDateTime(),
      'updated_at'             => new myValidatorDojoDateTime(),
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
