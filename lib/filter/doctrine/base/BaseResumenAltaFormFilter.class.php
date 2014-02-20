<?php

/**
 * ResumenAlta filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseResumenAltaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'diagnostico_provisional'          => new sfWidgetFormFilterInput(),
      'diagnostico_definitivo'           => new sfWidgetFormFilterInput(),
      'operaciones'                      => new sfWidgetFormFilterInput(),
      'anamesis_examenfisico'            => new sfWidgetFormFilterInput(),
      'hallazgos_labo_interconsultas'    => new sfWidgetFormFilterInput(),
      'evolucion_complicacion'           => new sfWidgetFormFilterInput(),
      'condicion_tratamiento_pronostico' => new sfWidgetFormFilterInput(),
      'created_at'                       => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'                       => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'created_by'                       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'motivo_anulacion'                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'internado_id'                     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'diagnostico_provisional'          => new sfValidatorPass(array('required' => false)),
      'diagnostico_definitivo'           => new sfValidatorPass(array('required' => false)),
      'operaciones'                      => new sfValidatorPass(array('required' => false)),
      'anamesis_examenfisico'            => new sfValidatorPass(array('required' => false)),
      'hallazgos_labo_interconsultas'    => new sfValidatorPass(array('required' => false)),
      'evolucion_complicacion'           => new sfValidatorPass(array('required' => false)),
      'condicion_tratamiento_pronostico' => new sfValidatorPass(array('required' => false)),
      'created_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'                       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'                       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
      'motivo_anulacion'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resumen_alta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResumenAlta';
  }

  public function getFields()
  {
    return array(
      'id'                               => 'Number',
      'internado_id'                     => 'ForeignKey',
      'diagnostico_provisional'          => 'Text',
      'diagnostico_definitivo'           => 'Text',
      'operaciones'                      => 'Text',
      'anamesis_examenfisico'            => 'Text',
      'hallazgos_labo_interconsultas'    => 'Text',
      'evolucion_complicacion'           => 'Text',
      'condicion_tratamiento_pronostico' => 'Text',
      'created_at'                       => 'Date',
      'updated_at'                       => 'Date',
      'created_by'                       => 'ForeignKey',
      'updated_by'                       => 'ForeignKey',
      'motivo_anulacion'                 => 'Text',
    );
  }
}
