<?php

/**
 * DetallePapeletaPedidoMaterial filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDetallePapeletaPedidoMaterialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'papeleta_pedido_material_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PapeletaPedidoMaterial'), 'add_empty' => true)),
      'columna1'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'columna2'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'columna3'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                  => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'                  => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'papeleta_pedido_material_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PapeletaPedidoMaterial'), 'column' => 'id')),
      'columna1'                    => new sfValidatorPass(array('required' => false)),
      'columna2'                    => new sfValidatorPass(array('required' => false)),
      'columna3'                    => new sfValidatorPass(array('required' => false)),
      'created_at'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('detalle_papeleta_pedido_material_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetallePapeletaPedidoMaterial';
  }

  public function getFields()
  {
    return array(
      'id'                          => 'Number',
      'papeleta_pedido_material_id' => 'ForeignKey',
      'columna1'                    => 'Text',
      'columna2'                    => 'Text',
      'columna3'                    => 'Text',
      'created_at'                  => 'Date',
      'updated_at'                  => 'Date',
    );
  }
}
