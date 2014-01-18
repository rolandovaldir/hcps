<?php

/**
 * UsoHospitalario form base class.
 *
 * @method UsoHospitalario getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsoHospitalarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'internado_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'lugar'        => new sfWidgetFormInputText(),
      'fecha'        => new myWidgetFormDojoDate(),
      'medico_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Medico'), 'add_empty' => true)),
      'codigo'       => new sfWidgetFormInputText(),
      'especialidad' => new sfWidgetFormInputText(),
      'created_at'   => new myWidgetFormDojoDateTime(),
      'updated_at'   => new myWidgetFormDojoDateTime(),
      'created_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'lugar'        => new sfValidatorString(array('max_length' => 60)),
      'fecha'        => new myValidatorDojoDate(),
      'medico_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Medico'), 'required' => false)),
      'codigo'       => new sfValidatorString(array('max_length' => 45)),
      'especialidad' => new sfValidatorString(array('max_length' => 45)),
      'created_at'   => new myValidatorDojoDateTime(),
      'updated_at'   => new myValidatorDojoDateTime(),
      'created_by'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('uso_hospitalario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsoHospitalario';
  }

}
