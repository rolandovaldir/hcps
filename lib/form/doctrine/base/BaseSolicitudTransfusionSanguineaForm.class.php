<?php

/**
 * SolicitudTransfusionSanguinea form base class.
 *
 * @method SolicitudTransfusionSanguinea getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSolicitudTransfusionSanguineaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'internado_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'quirofano'                 => new sfWidgetFormInputText(),
      'requiere_transfusion_de'   => new sfWidgetFormInputText(),
      'cumplirse_enforma'         => new sfWidgetFormInputText(),
      'fecha_prog_quirurgica'     => new myWidgetFormDojoDate(),
      'hora_prog_quirurgica'      => new myWidgetFormDojoTime(),
      'quirofano_prog_quirurgica' => new sfWidgetFormInputText(),
      'cantidad_requerida'        => new myWidgetFormDojoInteger(),
      'cantidad_requerida_unidad' => new sfWidgetFormInputText(),
      'observaciones'             => new sfWidgetFormInputText(),
      'fecha_solicitud'           => new myWidgetFormDojoDate(),
      'hora_solicitud'            => new myWidgetFormDojoTime(),
      'medico_id'                 => new myWidgetFormDojoInteger(),
      'numero'                    => new sfWidgetFormInputText(),
      'fecha_recepcion_solicitud' => new myWidgetFormDojoDate(),
      'bolsa_compatible1'         => new sfWidgetFormInputText(),
      'bolsa_compatible2'         => new sfWidgetFormInputText(),
      'bolsa_compatible3'         => new sfWidgetFormInputText(),
      'bolsa_compatible4'         => new sfWidgetFormInputText(),
      'bolsa_compatible5'         => new sfWidgetFormInputText(),
      'grupo_sanguineo_receptor'  => new sfWidgetFormInputText(),
      'hr_receptor'               => new sfWidgetFormInputText(),
      'anticuerpos_irreg'         => new sfWidgetFormInputText(),
      'nombre_res_bancosangre'    => new sfWidgetFormInputText(),
      'created_at'                => new myWidgetFormDojoDateTime(),
      'updated_at'                => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'required' => false)),
      'quirofano'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'requiere_transfusion_de'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cumplirse_enforma'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fecha_prog_quirurgica'     => new myValidatorDojoDate(array('required' => false)),
      'hora_prog_quirurgica'      => new sfValidatorTime(array('required' => false)),
      'quirofano_prog_quirurgica' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'cantidad_requerida'        => new sfValidatorInteger(array('required' => false)),
      'cantidad_requerida_unidad' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'observaciones'             => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'fecha_solicitud'           => new myValidatorDojoDate(array('required' => false)),
      'hora_solicitud'            => new sfValidatorTime(array('required' => false)),
      'medico_id'                 => new sfValidatorInteger(array('required' => false)),
      'numero'                    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_recepcion_solicitud' => new myValidatorDojoDate(array('required' => false)),
      'bolsa_compatible1'         => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'bolsa_compatible2'         => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'bolsa_compatible3'         => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'bolsa_compatible4'         => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'bolsa_compatible5'         => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'grupo_sanguineo_receptor'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'hr_receptor'               => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'anticuerpos_irreg'         => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nombre_res_bancosangre'    => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'created_at'                => new myValidatorDojoDateTime(),
      'updated_at'                => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('solicitud_transfusion_sanguinea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SolicitudTransfusionSanguinea';
  }

}
