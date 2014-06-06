<?php

/**
 * ListaDieta filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseListaDietaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'enfermera_id'   => new sfWidgetFormFilterInput(),
      'servicio_id'    => new sfWidgetFormFilterInput(),
      'fecha'          => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>')),
      'dieta'          => new sfWidgetFormFilterInput(),
      'diagnostico'    => new sfWidgetFormFilterInput(),
      'observacion'    => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'created_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'tipo_borrado'   => new sfWidgetFormFilterInput(),
      'motivo_borrado' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'internado_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'enfermera_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'dieta'          => new sfValidatorPass(array('required' => false)),
      'diagnostico'    => new sfValidatorPass(array('required' => false)),
      'observacion'    => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
      'tipo_borrado'   => new sfValidatorPass(array('required' => false)),
      'motivo_borrado' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lista_dieta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ListaDieta';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'internado_id'   => 'ForeignKey',
      'enfermera_id'   => 'Number',
      'servicio_id'    => 'Number',
      'fecha'          => 'Date',
      'dieta'          => 'Text',
      'diagnostico'    => 'Text',
      'observacion'    => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'created_by'     => 'ForeignKey',
      'updated_by'     => 'ForeignKey',
      'tipo_borrado'   => 'Text',
      'motivo_borrado' => 'Text',
    );
  }
}
