<?php

/**
 * SolicitudServicio form base class.
 *
 * @method SolicitudServicio getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSolicitudServicioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'file_internacion_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => false)),
      'atencion_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Atencion'), 'add_empty' => false)),
      'para'                   => new sfWidgetFormTextarea(),
      'diagnostico_presuncion' => new sfWidgetFormInputText(),
      'material_utilizado'     => new sfWidgetFormTextarea(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'file_internacion_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'))),
      'atencion_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Atencion'))),
      'para'                   => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'diagnostico_presuncion' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'material_utilizado'     => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('solicitud_servicio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SolicitudServicio';
  }

}
