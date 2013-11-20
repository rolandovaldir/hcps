<?php

/**
 * DetalleOrdenMedica form base class.
 *
 * @method DetalleOrdenMedica getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleOrdenMedicaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                            => new sfWidgetFormInputHidden(),
      'orden_medica_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrdenMedica'), 'add_empty' => false)),
      'via_administracion_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'), 'add_empty' => false)),
      'fecha_hora'                    => new sfWidgetFormDateTime(),
      'nombre_medicamento_indicacion' => new sfWidgetFormInputText(),
      'dosis_intervalo'               => new sfWidgetFormInputText(),
      'fecha_inicio'                  => new sfWidgetFormDate(),
      'fecha_terminacion'             => new sfWidgetFormDate(),
      'created_at'                    => new sfWidgetFormDateTime(),
      'updated_at'                    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'orden_medica_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OrdenMedica'))),
      'via_administracion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'))),
      'fecha_hora'                    => new sfValidatorDateTime(array('required' => false)),
      'nombre_medicamento_indicacion' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'dosis_intervalo'               => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'fecha_inicio'                  => new sfValidatorDate(array('required' => false)),
      'fecha_terminacion'             => new sfValidatorDate(array('required' => false)),
      'created_at'                    => new sfValidatorDateTime(),
      'updated_at'                    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_orden_medica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleOrdenMedica';
  }

}
