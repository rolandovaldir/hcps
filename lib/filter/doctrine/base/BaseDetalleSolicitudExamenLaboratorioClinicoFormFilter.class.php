<?php

/**
 * DetalleSolicitudExamenLaboratorioClinico filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDetalleSolicitudExamenLaboratorioClinicoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'solicitud_examen_laboratorio_clinico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudExamenLaboratorioClinico'), 'add_empty' => true)),
      'tipo_examen_laboratorio_clinico_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoExamenLaboratorioClinico'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'solicitud_examen_laboratorio_clinico_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SolicitudExamenLaboratorioClinico'), 'column' => 'id')),
      'tipo_examen_laboratorio_clinico_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoExamenLaboratorioClinico'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('detalle_solicitud_examen_laboratorio_clinico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleSolicitudExamenLaboratorioClinico';
  }

  public function getFields()
  {
    return array(
      'id'                                      => 'Number',
      'solicitud_examen_laboratorio_clinico_id' => 'ForeignKey',
      'tipo_examen_laboratorio_clinico_id'      => 'ForeignKey',
    );
  }
}
