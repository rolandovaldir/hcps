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
      'internado_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'medico_id'                => new sfWidgetFormFilterInput(),
      'servicio'                 => new sfWidgetFormFilterInput(),
      'servicio_egreso'          => new sfWidgetFormFilterInput(),
      'diagnostico_provisional'  => new sfWidgetFormFilterInput(),
      'diagnostico_definitivo'   => new sfWidgetFormFilterInput(),
      'operaciones'              => new sfWidgetFormFilterInput(),
      'anamnesis_examfisico'     => new sfWidgetFormFilterInput(),
      'hallazgos_lab_rayx'       => new sfWidgetFormFilterInput(),
      'evolucion_complicacion'   => new sfWidgetFormFilterInput(),
      'cond_trat_ref_pronostico' => new sfWidgetFormFilterInput(),
      'fecha'                    => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>')),
      'created_at'               => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'               => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'internado_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'medico_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio'                 => new sfValidatorPass(array('required' => false)),
      'servicio_egreso'          => new sfValidatorPass(array('required' => false)),
      'diagnostico_provisional'  => new sfValidatorPass(array('required' => false)),
      'diagnostico_definitivo'   => new sfValidatorPass(array('required' => false)),
      'operaciones'              => new sfValidatorPass(array('required' => false)),
      'anamnesis_examfisico'     => new sfValidatorPass(array('required' => false)),
      'hallazgos_lab_rayx'       => new sfValidatorPass(array('required' => false)),
      'evolucion_complicacion'   => new sfValidatorPass(array('required' => false)),
      'cond_trat_ref_pronostico' => new sfValidatorPass(array('required' => false)),
      'fecha'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'id'                       => 'Number',
      'internado_id'             => 'ForeignKey',
      'medico_id'                => 'Number',
      'servicio'                 => 'Text',
      'servicio_egreso'          => 'Text',
      'diagnostico_provisional'  => 'Text',
      'diagnostico_definitivo'   => 'Text',
      'operaciones'              => 'Text',
      'anamnesis_examfisico'     => 'Text',
      'hallazgos_lab_rayx'       => 'Text',
      'evolucion_complicacion'   => 'Text',
      'cond_trat_ref_pronostico' => 'Text',
      'fecha'                    => 'Date',
      'created_at'               => 'Date',
      'updated_at'               => 'Date',
    );
  }
}
