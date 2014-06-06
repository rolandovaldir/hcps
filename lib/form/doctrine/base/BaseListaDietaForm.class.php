<?php

/**
 * ListaDieta form base class.
 *
 * @method ListaDieta getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseListaDietaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'internado_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'enfermera_id'   => new myWidgetFormDojoInteger(),
      'servicio_id'    => new myWidgetFormDojoInteger(),
      'fecha'          => new myWidgetFormDojoDate(),
      'dieta'          => new sfWidgetFormTextarea(),
      'diagnostico'    => new sfWidgetFormTextarea(),
      'observacion'    => new sfWidgetFormTextarea(),
      'created_at'     => new myWidgetFormDojoDateTime(),
      'updated_at'     => new myWidgetFormDojoDateTime(),
      'created_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'tipo_borrado'   => new sfWidgetFormInputText(),
      'motivo_borrado' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'required' => false)),
      'enfermera_id'   => new sfValidatorInteger(array('required' => false)),
      'servicio_id'    => new sfValidatorInteger(array('required' => false)),
      'fecha'          => new myValidatorDojoDate(array('required' => false)),
      'dieta'          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'diagnostico'    => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'observacion'    => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'created_at'     => new myValidatorDojoDateTime(),
      'updated_at'     => new myValidatorDojoDateTime(),
      'created_by'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
      'tipo_borrado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'motivo_borrado' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lista_dieta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ListaDieta';
  }

}
