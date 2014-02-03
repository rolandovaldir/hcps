<?php

/**
 * DetalleMedicacion form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DetalleMedicacionForm extends BaseDetalleMedicacionForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['solicitud_interconsulta_id'],
            $this['created_by'], $this['updated_by']);
  }
}
