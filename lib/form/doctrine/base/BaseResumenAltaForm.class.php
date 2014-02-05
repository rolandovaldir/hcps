<?php

/**
 * ResumenAlta form base class.
 *
 * @method ResumenAlta getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseResumenAltaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                               => new sfWidgetFormInputHidden(),
      'internado_id'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'diagnostico_provisional'          => new sfWidgetFormTextarea(),
      'diagnostico_definitivo'           => new sfWidgetFormTextarea(),
      'operaciones'                      => new sfWidgetFormTextarea(),
      'anamesis_examenfisico'            => new sfWidgetFormTextarea(),
      'hallazgos_labo_interconsultas'    => new sfWidgetFormTextarea(),
      'evolucion_complicacion'           => new sfWidgetFormTextarea(),
      'condicion_tratamiento_pronostico' => new sfWidgetFormTextarea(),
      'created_at'                       => new myWidgetFormDojoDateTime(),
      'updated_at'                       => new myWidgetFormDojoDateTime(),
      'created_by'                       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'                     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'diagnostico_provisional'          => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'diagnostico_definitivo'           => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'operaciones'                      => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'anamesis_examenfisico'            => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'hallazgos_labo_interconsultas'    => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'evolucion_complicacion'           => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'condicion_tratamiento_pronostico' => new sfValidatorString(array('max_length' => 8000, 'required' => false)),
      'created_at'                       => new myValidatorDojoDateTime(),
      'updated_at'                       => new myValidatorDojoDateTime(),
      'created_by'                       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'                       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resumen_alta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResumenAlta';
  }

}
