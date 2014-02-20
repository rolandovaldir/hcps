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
      'internado_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'atencion_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Atencion'), 'add_empty' => false)),
      'fecha'                  => new myWidgetFormDojoDate(),
      'para'                   => new sfWidgetFormTextarea(),
      'diagnostico_presuncion' => new sfWidgetFormTextarea(),
      'material_utilizado'     => new sfWidgetFormTextarea(),
      'created_at'             => new myWidgetFormDojoDateTime(),
      'updated_at'             => new myWidgetFormDojoDateTime(),
      'created_by'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'motivo_anulacion'       => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'atencion_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Atencion'))),
      'fecha'                  => new myValidatorDojoDate(),
      'para'                   => new sfValidatorString(array('max_length' => 2000)),
      'diagnostico_presuncion' => new sfValidatorString(array('max_length' => 250)),
      'material_utilizado'     => new sfValidatorString(array('max_length' => 2000)),
      'created_at'             => new myValidatorDojoDateTime(),
      'updated_at'             => new myValidatorDojoDateTime(),
      'created_by'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
      'motivo_anulacion'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
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
