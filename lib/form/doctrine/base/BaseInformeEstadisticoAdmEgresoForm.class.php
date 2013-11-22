<?php

/**
 * InformeEstadisticoAdmEgreso form base class.
 *
 * @method InformeEstadisticoAdmEgreso getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseInformeEstadisticoAdmEgresoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'file_internacion_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => true)),
      'urgencia_persona_ref'     => new sfWidgetFormInputText(),
      'urgencia_direccion_calle' => new sfWidgetFormInputText(),
      'urgencia_direccion_no'    => new sfWidgetFormInputText(),
      'urgencia_direccion_fono'  => new sfWidgetFormInputText(),
      'created_at'               => new sfWidgetFormDateTime(),
      'updated_at'               => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'file_internacion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'required' => false)),
      'urgencia_persona_ref'     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'urgencia_direccion_calle' => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'urgencia_direccion_no'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'urgencia_direccion_fono'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'created_at'               => new sfValidatorDateTime(),
      'updated_at'               => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('informe_estadistico_adm_egreso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'InformeEstadisticoAdmEgreso';
  }

}
