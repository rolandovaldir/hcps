<?php

/**
 * DetallePapeletaPedidoMaterial form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DetallePapeletaPedidoMaterialForm extends BaseDetallePapeletaPedidoMaterialForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['papeleta_pedido_material_id'], 
            $this['created_by'], $this['updated_by']);
  }
}
