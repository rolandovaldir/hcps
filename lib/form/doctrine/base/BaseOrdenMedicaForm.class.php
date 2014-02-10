<?php

/**
 * OrdenMedica form base class.
 *
 * @method OrdenMedica getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrdenMedicaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'internado_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'via_administracion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'), 'add_empty' => false)),
      'fecha_hora'            => new myWidgetFormDojoDateTime(),
      'nombre_medicamento'    => new sfWidgetFormTextarea(),
      'indicacion'            => new sfWidgetFormTextarea(),
      'dosis_intervalo'       => new sfWidgetFormTextarea(),
      'fecha_inicio'          => new myWidgetFormDojoDate(),
      'fecha_terminacion'     => new myWidgetFormDojoDate(),
      'created_at'            => new myWidgetFormDojoDateTime(),
      'updated_at'            => new myWidgetFormDojoDateTime(),
      'created_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'via_administracion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'))),
      'fecha_hora'            => new myValidatorDojoDateTime(array('required' => false)),
      'nombre_medicamento'    => new sfValidatorString(array('max_length' => 200)),
      'indicacion'            => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'dosis_intervalo'       => new sfValidatorString(array('max_length' => 200)),
      'fecha_inicio'          => new myValidatorDojoDate(),
      'fecha_terminacion'     => new myValidatorDojoDate(),
      'created_at'            => new myValidatorDojoDateTime(),
      'updated_at'            => new myValidatorDojoDateTime(),
      'created_by'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orden_medica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrdenMedica';
  }

}
