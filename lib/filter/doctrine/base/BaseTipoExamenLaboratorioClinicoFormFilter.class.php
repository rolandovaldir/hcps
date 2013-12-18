<?php

/**
 * TipoExamenLaboratorioClinico filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTipoExamenLaboratorioClinicoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'grupo_orden'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grupo_nombre'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'examen_orden'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'examen_nombre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'activo'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'grupo_orden'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grupo_nombre'  => new sfValidatorPass(array('required' => false)),
      'examen_orden'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'examen_nombre' => new sfValidatorPass(array('required' => false)),
      'activo'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tipo_examen_laboratorio_clinico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoExamenLaboratorioClinico';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'grupo_orden'   => 'Number',
      'grupo_nombre'  => 'Text',
      'examen_orden'  => 'Number',
      'examen_nombre' => 'Text',
      'activo'        => 'Boolean',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
