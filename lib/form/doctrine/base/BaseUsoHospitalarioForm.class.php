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
      'fecha'        => new sfWidgetFormDate(),
      'medico_id'    => new sfWidgetFormInputText(),
      'codigo'       => new sfWidgetFormInputText(),
      'especialidad' => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'lugar'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fecha'        => new sfValidatorDate(array('required' => false)),
      'medico_id'    => new sfValidatorInteger(array('required' => false)),
      'codigo'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'especialidad' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
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
