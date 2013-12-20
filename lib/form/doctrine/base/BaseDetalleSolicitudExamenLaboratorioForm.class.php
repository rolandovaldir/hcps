<?php

/**
 * DetalleSolicitudExamenLaboratorio form base class.
 *
 * @method DetalleSolicitudExamenLaboratorio getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleSolicitudExamenLaboratorioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                              => new sfWidgetFormInputHidden(),
      'solicitud_examen_laboratorio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudExamenLaboratorio'), 'add_empty' => false)),
      'tipo'                            => new myWidgetFormDojoInteger(),
      'created_at'                      => new myWidgetFormDojoDateTime(),
      'updated_at'                      => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'solicitud_examen_laboratorio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudExamenLaboratorio'))),
      'tipo'                            => new sfValidatorInteger(array('required' => false)),
      'created_at'                      => new myValidatorDojoDateTime(),
      'updated_at'                      => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_solicitud_examen_laboratorio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleSolicitudExamenLaboratorio';
  }

}
