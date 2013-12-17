<?php

/**
 * Medico form base class.
 *
 * @method Medico getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'codigo'          => new sfWidgetFormInputText(),
      'nombrec'         => new sfWidgetFormInputText(),
      'cargahor'        => new sfWidgetFormInputText(),
      'hor_ini'         => new sfWidgetFormInputText(),
      'hor_fin'         => new sfWidgetFormInputText(),
      'intervalo'       => new sfWidgetFormInputText(),
      'activo'          => new sfWidgetFormInputText(),
      'cupos'           => new sfWidgetFormInputText(),
      'consultorio'     => new sfWidgetFormInputText(),
      'observacion'     => new sfWidgetFormTextarea(),
      'especialidad_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Especialidad'), 'add_empty' => false)),
      'item_id'         => new sfWidgetFormInputText(),
      'created_at'      => new myWidgetFormDojoDateTime(),
      'updated_at'      => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'          => new sfValidatorString(array('max_length' => 8)),
      'nombrec'         => new sfValidatorString(array('max_length' => 100)),
      'cargahor'        => new sfValidatorInteger(array('required' => false)),
      'hor_ini'         => new sfValidatorString(array('max_length' => 5)),
      'hor_fin'         => new sfValidatorString(array('max_length' => 5)),
      'intervalo'       => new sfValidatorInteger(),
      'activo'          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cupos'           => new sfValidatorInteger(array('required' => false)),
      'consultorio'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'observacion'     => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'especialidad_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Especialidad'))),
      'item_id'         => new sfValidatorInteger(),
      'created_at'      => new myValidatorDojoDateTime(),
      'updated_at'      => new myValidatorDojoDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Medico', 'column' => array('codigo')))
    );

    $this->widgetSchema->setNameFormat('medico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Medico';
  }

}
