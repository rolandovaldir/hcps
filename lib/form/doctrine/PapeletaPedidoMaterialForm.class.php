<?php

/**
 * PapeletaPedidoMaterial form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PapeletaPedidoMaterialForm extends BasePapeletaPedidoMaterialForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
            
      $this->setWidget("internado_id", new sfWidgetFormInputHidden());
            
      $detalle = new DetallePapeletaPedidoMaterial();
      $detalle->setPapeletaPedidoMaterial($this->object);
      $detalleForm = new DetallePapeletaPedidoMaterialForm($detalle);
      $this->embedForm('detalle', $detalleForm);
  }
  
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
}
