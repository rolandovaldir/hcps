<?php

/**
 * SolicitudInterconsulta filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSolicitudInterconsultaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'dirigida_a'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'especialidad'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'motivo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datos_clinicos'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'informe_medico'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'conclusiones'    => new sfWidgetFormFilterInput(),
      'hora_solicitud'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_solicitud' => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'internado_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'dirigida_a'      => new sfValidatorPass(array('required' => false)),
      'especialidad'    => new sfValidatorPass(array('required' => false)),
      'motivo'          => new sfValidatorPass(array('required' => false)),
      'datos_clinicos'  => new sfValidatorPass(array('required' => false)),
      'informe_medico'  => new sfValidatorPass(array('required' => false)),
      'conclusiones'    => new sfValidatorPass(array('required' => false)),
      'hora_solicitud'  => new sfValidatorPass(array('required' => false)),
      'fecha_solicitud' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('solicitud_interconsulta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SolicitudInterconsulta';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'internado_id'    => 'ForeignKey',
      'dirigida_a'      => 'Text',
      'especialidad'    => 'Text',
      'motivo'          => 'Text',
      'datos_clinicos'  => 'Text',
      'informe_medico'  => 'Text',
      'conclusiones'    => 'Text',
      'hora_solicitud'  => 'Text',
      'fecha_solicitud' => 'Date',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
