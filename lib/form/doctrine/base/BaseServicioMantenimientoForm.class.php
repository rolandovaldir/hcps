<?php

/**
 * ServicioMantenimiento form base class.
 *
 * @method ServicioMantenimiento getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseServicioMantenimientoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'internado_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'solicitante'        => new sfWidgetFormInputText(),
      'sector'             => new sfWidgetFormInputText(),
      'fecha_solicitante'  => new sfWidgetFormDate(),
      'objeto_reparado'    => new sfWidgetFormInputText(),
      'caracteristicas'    => new sfWidgetFormInputText(),
      'trabajo_solicitado' => new sfWidgetFormTextarea(),
      'conformidad'        => new sfWidgetFormInputText(),
      'reparado_por'       => new sfWidgetFormInputText(),
      'importe'            => new sfWidgetFormInputText(),
      'importe_fecha'      => new sfWidgetFormDate(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'solicitante'        => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'sector'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fecha_solicitante'  => new sfValidatorDate(array('required' => false)),
      'objeto_reparado'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'caracteristicas'    => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'trabajo_solicitado' => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'conformidad'        => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'reparado_por'       => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'importe'            => new sfValidatorInteger(array('required' => false)),
      'importe_fecha'      => new sfValidatorDate(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('servicio_mantenimiento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServicioMantenimiento';
  }

}
