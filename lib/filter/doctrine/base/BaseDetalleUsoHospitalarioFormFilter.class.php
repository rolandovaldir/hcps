<?php

/**
 * DetalleUsoHospitalario filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDetalleUsoHospitalarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'uso_hospitalario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsoHospitalario'), 'add_empty' => true)),
      'codigo_cbm'          => new sfWidgetFormFilterInput(),
      'detalle'             => new sfWidgetFormFilterInput(),
      'cantidad'            => new sfWidgetFormFilterInput(),
      'unidad'              => new sfWidgetFormFilterInput(),
      'cod_farmacia_ibm'    => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'uso_hospitalario_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UsoHospitalario'), 'column' => 'id')),
      'codigo_cbm'          => new sfValidatorPass(array('required' => false)),
      'detalle'             => new sfValidatorPass(array('required' => false)),
      'cantidad'            => new sfValidatorPass(array('required' => false)),
      'unidad'              => new sfValidatorPass(array('required' => false)),
      'cod_farmacia_ibm'    => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('detalle_uso_hospitalario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleUsoHospitalario';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'uso_hospitalario_id' => 'ForeignKey',
      'codigo_cbm'          => 'Text',
      'detalle'             => 'Text',
      'cantidad'            => 'Text',
      'unidad'              => 'Text',
      'cod_farmacia_ibm'    => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
