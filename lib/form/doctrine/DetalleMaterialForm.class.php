<?php

/**
 * DetalleMaterial form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DetalleMaterialForm extends BaseDetalleMaterialForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['solicitud_reposicion_material_id']);
  }
}
