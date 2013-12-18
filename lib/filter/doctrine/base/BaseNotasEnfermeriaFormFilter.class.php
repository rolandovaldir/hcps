<?php

/**
 * NotasEnfermeria filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNotasEnfermeriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'fecha'          => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>')),
      'hora'           => new sfWidgetFormFilterInput(),
      'procedimientos' => new sfWidgetFormFilterInput(),
      'observaciones'  => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'internado_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'fecha'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora'           => new sfValidatorPass(array('required' => false)),
      'procedimientos' => new sfValidatorPass(array('required' => false)),
      'observaciones'  => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('notas_enfermeria_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasEnfermeria';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'internado_id'   => 'ForeignKey',
      'fecha'          => 'Date',
      'hora'           => 'Text',
      'procedimientos' => 'Text',
      'observaciones'  => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
