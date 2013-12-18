<?php

/**
 * TipoExamenLaboratorioClinico form base class.
 *
 * @method TipoExamenLaboratorioClinico getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTipoExamenLaboratorioClinicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'grupo_orden'   => new sfWidgetFormInputText(),
      'grupo_nombre'  => new sfWidgetFormInputText(),
      'examen_orden'  => new sfWidgetFormInputText(),
      'examen_nombre' => new sfWidgetFormInputText(),
      'activo'        => new sfWidgetFormInputCheckbox(),
      'created_at'    => new myWidgetFormDojoDateTime(),
      'updated_at'    => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'grupo_orden'   => new sfValidatorInteger(),
      'grupo_nombre'  => new sfValidatorString(array('max_length' => 50)),
      'examen_orden'  => new sfValidatorInteger(),
      'examen_nombre' => new sfValidatorString(array('max_length' => 150)),
      'activo'        => new sfValidatorBoolean(),
      'created_at'    => new myValidatorDojoDateTime(),
      'updated_at'    => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tipo_examen_laboratorio_clinico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoExamenLaboratorioClinico';
  }

}
