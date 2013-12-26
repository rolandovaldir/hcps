<?php

/**
 * DetalleMedicacion form base class.
 *
 * @method DetalleMedicacion getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleMedicacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                          => new sfWidgetFormInputHidden(),
      'solicitud_intercosultada_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudInterconsulta'), 'add_empty' => false)),
      'medicacion_utilizada'        => new sfWidgetFormInputText(),
      'dosis'                       => new sfWidgetFormInputText(),
      'fecha_inicio'                => new sfWidgetFormDate(),
      'created_at'                  => new sfWidgetFormDateTime(),
      'updated_at'                  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'solicitud_intercosultada_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudInterconsulta'))),
      'medicacion_utilizada'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'dosis'                       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_inicio'                => new sfValidatorDate(array('required' => false)),
      'created_at'                  => new sfValidatorDateTime(),
      'updated_at'                  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_medicacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleMedicacion';
  }

}
