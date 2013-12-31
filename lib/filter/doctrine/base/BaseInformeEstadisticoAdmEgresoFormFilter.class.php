<?php

/**
 * InformeEstadisticoAdmEgreso filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseInformeEstadisticoAdmEgresoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'urgencia_persona_ref'     => new sfWidgetFormFilterInput(),
      'urgencia_direccion_calle' => new sfWidgetFormFilterInput(),
      'urgencia_direccion_no'    => new sfWidgetFormFilterInput(),
      'urgencia_direccion_fono'  => new sfWidgetFormFilterInput(),
      'created_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'internado_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'urgencia_persona_ref'     => new sfValidatorPass(array('required' => false)),
      'urgencia_direccion_calle' => new sfValidatorPass(array('required' => false)),
      'urgencia_direccion_no'    => new sfValidatorPass(array('required' => false)),
      'urgencia_direccion_fono'  => new sfValidatorPass(array('required' => false)),
      'created_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('informe_estadistico_adm_egreso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'InformeEstadisticoAdmEgreso';
  }

  public function getFields()
  {
    return array(
      'id'                       => 'Number',
      'internado_id'             => 'ForeignKey',
      'urgencia_persona_ref'     => 'Text',
      'urgencia_direccion_calle' => 'Text',
      'urgencia_direccion_no'    => 'Text',
      'urgencia_direccion_fono'  => 'Text',
      'created_at'               => 'Date',
      'updated_at'               => 'Date',
    );
  }
}
