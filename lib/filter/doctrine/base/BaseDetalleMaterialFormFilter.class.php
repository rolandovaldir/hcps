<?php

/**
 * DetalleMaterial filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDetalleMaterialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'solicitud_reposicion_material_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SolicitudReposicionMaterial'), 'add_empty' => true)),
      'codigo'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidad'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo_anterior'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reposicion_solicitada'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo_actual'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                       => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'                       => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'solicitud_reposicion_material_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SolicitudReposicionMaterial'), 'column' => 'id')),
      'codigo'                           => new sfValidatorPass(array('required' => false)),
      'descripcion'                      => new sfValidatorPass(array('required' => false)),
      'unidad'                           => new sfValidatorPass(array('required' => false)),
      'saldo_anterior'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reposicion_solicitada'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'saldo_actual'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('detalle_material_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleMaterial';
  }

  public function getFields()
  {
    return array(
      'id'                               => 'Number',
      'solicitud_reposicion_material_id' => 'ForeignKey',
      'codigo'                           => 'Text',
      'descripcion'                      => 'Text',
      'unidad'                           => 'Text',
      'saldo_anterior'                   => 'Number',
      'reposicion_solicitada'            => 'Number',
      'saldo_actual'                     => 'Number',
      'created_at'                       => 'Date',
      'updated_at'                       => 'Date',
    );
  }
}
