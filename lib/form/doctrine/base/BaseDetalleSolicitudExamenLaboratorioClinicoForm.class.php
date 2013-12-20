<?php

/**
 * DetalleSolicitudExamenLaboratorioClinico form base class.
 *
 * @method DetalleSolicitudExamenLaboratorioClinico getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleSolicitudExamenLaboratorioClinicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                      => new sfWidgetFormInputHidden(),
      'solicitud_examen_laboratorio_clinico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudExamenLaboratorioClinico'), 'add_empty' => false)),
      'tipo_examen_laboratorio_clinico_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoExamenLaboratorioClinico'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'solicitud_examen_laboratorio_clinico_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudExamenLaboratorioClinico'))),
      'tipo_examen_laboratorio_clinico_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoExamenLaboratorioClinico'))),
    ));

    $this->widgetSchema->setNameFormat('detalle_solicitud_examen_laboratorio_clinico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleSolicitudExamenLaboratorioClinico';
  }

}
