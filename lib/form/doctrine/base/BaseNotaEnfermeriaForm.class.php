<?php

/**
 * NotaEnfermeria form base class.
 *
 * @method NotaEnfermeria getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNotaEnfermeriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'file_internacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => false)),
      'numero_hoja'         => new sfWidgetFormInputText(),
      'created_at'          => new myWidgetFormDojoDateTime(),
      'updated_at'          => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'file_internacion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'))),
      'numero_hoja'         => new sfValidatorInteger(array('required' => false)),
      'created_at'          => new myValidatorDojoDateTime(),
      'updated_at'          => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('nota_enfermeria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotaEnfermeria';
  }

}
