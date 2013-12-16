<?php

/**
 * AutorizacionAutopsia filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAutorizacionAutopsiaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'nombre_familiar1' => new sfWidgetFormFilterInput(),
      'tipo_parentesco1' => new sfWidgetFormFilterInput(),
      'ci_familiar1'     => new sfWidgetFormFilterInput(),
      'nombre_familiar2' => new sfWidgetFormFilterInput(),
      'tipo_parentesco2' => new sfWidgetFormFilterInput(),
      'ci_familiar2'     => new sfWidgetFormFilterInput(),
      'nombre_familiar3' => new sfWidgetFormFilterInput(),
      'tipo_parentesco3' => new sfWidgetFormFilterInput(),
      'ci_familiar3'     => new sfWidgetFormFilterInput(),
      'fecha_hora'       => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate())),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'internado_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'nombre_familiar1' => new sfValidatorPass(array('required' => false)),
      'tipo_parentesco1' => new sfValidatorPass(array('required' => false)),
      'ci_familiar1'     => new sfValidatorPass(array('required' => false)),
      'nombre_familiar2' => new sfValidatorPass(array('required' => false)),
      'tipo_parentesco2' => new sfValidatorPass(array('required' => false)),
      'ci_familiar2'     => new sfValidatorPass(array('required' => false)),
      'nombre_familiar3' => new sfValidatorPass(array('required' => false)),
      'tipo_parentesco3' => new sfValidatorPass(array('required' => false)),
      'ci_familiar3'     => new sfValidatorPass(array('required' => false)),
      'fecha_hora'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('autorizacion_autopsia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AutorizacionAutopsia';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'internado_id'     => 'ForeignKey',
      'nombre_familiar1' => 'Text',
      'tipo_parentesco1' => 'Text',
      'ci_familiar1'     => 'Text',
      'nombre_familiar2' => 'Text',
      'tipo_parentesco2' => 'Text',
      'ci_familiar2'     => 'Text',
      'nombre_familiar3' => 'Text',
      'tipo_parentesco3' => 'Text',
      'ci_familiar3'     => 'Text',
      'fecha_hora'       => 'Date',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
