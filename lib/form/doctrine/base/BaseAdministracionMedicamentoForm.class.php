<?php

/**
 * AdministracionMedicamento form base class.
 *
 * @method AdministracionMedicamento getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdministracionMedicamentoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'internado_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'enfermera_id'         => new sfWidgetFormInputText(),
      'medicamento_solucion' => new sfWidgetFormTextarea(),
      'tipo'                 => new sfWidgetFormInputText(),
      'fecha'                => new myWidgetFormDojoDate(),
      'horario'              => new myWidgetFormDojoTime(),
      'created_at'           => new myWidgetFormDojoDateTime(),
      'updated_at'           => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'enfermera_id'         => new sfValidatorInteger(array('required' => false)),
      'medicamento_solucion' => new sfValidatorString(array('max_length' => 400)),
      'tipo'                 => new sfValidatorString(array('max_length' => 1)),
      'fecha'                => new myValidatorDojoDate(),
      'horario'              => new sfValidatorTime(),
      'created_at'           => new myValidatorDojoDateTime(),
      'updated_at'           => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('administracion_medicamento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdministracionMedicamento';
  }

}
