<?php

/**
 * SolicitudInterconsulta form base class.
 *
 * @method SolicitudInterconsulta getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSolicitudInterconsultaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'internado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'dirigida_a'      => new sfWidgetFormInputText(),
      'especialidad'    => new sfWidgetFormInputText(),
      'motivo'          => new sfWidgetFormTextarea(),
      'datos_clinicos'  => new sfWidgetFormTextarea(),
      'informe_medico'  => new sfWidgetFormTextarea(),
      'conclusiones'    => new sfWidgetFormTextarea(),
      'hora_solicitud'  => new sfWidgetFormTime(),
      'fecha_solicitud' => new sfWidgetFormDate(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'dirigida_a'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'especialidad'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'motivo'          => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'datos_clinicos'  => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'informe_medico'  => new sfValidatorString(array('max_length' => 2500, 'required' => false)),
      'conclusiones'    => new sfValidatorString(array('max_length' => 2500, 'required' => false)),
      'hora_solicitud'  => new sfValidatorTime(array('required' => false)),
      'fecha_solicitud' => new sfValidatorDate(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('solicitud_interconsulta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SolicitudInterconsulta';
  }

}
