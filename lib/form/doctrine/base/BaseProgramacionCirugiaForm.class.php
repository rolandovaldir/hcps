<?php

/**
 * ProgramacionCirugia form base class.
 *
 * @method ProgramacionCirugia getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProgramacionCirugiaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'internado_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'medico_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Medico'), 'add_empty' => true)),
      'operacion_fecha'           => new myWidgetFormDojoDate(),
      'operacion_hora'            => new sfWidgetFormInputText(),
      'diagnostico_preoperatorio' => new sfWidgetFormTextarea(),
      'tratamiento_quirurgico'    => new sfWidgetFormTextarea(),
      'anestesia'                 => new sfWidgetFormTextarea(),
      'otros'                     => new sfWidgetFormTextarea(),
      'examenes_auxiliares'       => new sfWidgetFormInputText(),
      'fecha'                     => new myWidgetFormDojoDate(),
      'enfermera_id'              => new myWidgetFormDojoInteger(),
      'enviado'                   => new sfWidgetFormInputText(),
      'recibido'                  => new sfWidgetFormInputText(),
      'created_at'                => new myWidgetFormDojoDateTime(),
      'updated_at'                => new myWidgetFormDojoDateTime(),
      'created_by'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'medico_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Medico'), 'required' => false)),
      'operacion_fecha'           => new myValidatorDojoDate(),
      'operacion_hora'            => new sfValidatorString(array('max_length' => 100)),
      'diagnostico_preoperatorio' => new sfValidatorString(array('max_length' => 600)),
      'tratamiento_quirurgico'    => new sfValidatorString(array('max_length' => 500)),
      'anestesia'                 => new sfValidatorString(array('max_length' => 250)),
      'otros'                     => new sfValidatorString(array('max_length' => 250)),
      'examenes_auxiliares'       => new sfValidatorPass(array('required' => false)),
      'fecha'                     => new myValidatorDojoDate(array('required' => false)),
      'enfermera_id'              => new sfValidatorInteger(array('required' => false)),
      'enviado'                   => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'recibido'                  => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'created_at'                => new myValidatorDojoDateTime(),
      'updated_at'                => new myValidatorDojoDateTime(),
      'created_by'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('programacion_cirugia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProgramacionCirugia';
  }

}
