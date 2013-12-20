<?php

/**
 * MedicoParticular filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedicoParticularFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'junta_medica_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JuntaMedica'), 'add_empty' => true)),
      'nombre'          => new sfWidgetFormFilterInput(),
      'especialidad'    => new sfWidgetFormFilterInput(),
      'cargo'           => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'junta_medica_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('JuntaMedica'), 'column' => 'id')),
      'nombre'          => new sfValidatorPass(array('required' => false)),
      'especialidad'    => new sfValidatorPass(array('required' => false)),
      'cargo'           => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('medico_particular_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedicoParticular';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'junta_medica_id' => 'ForeignKey',
      'nombre'          => 'Text',
      'especialidad'    => 'Text',
      'cargo'           => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
