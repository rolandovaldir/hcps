<?php

/**
 * Apgar form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ApgarForm extends BaseApgarForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['examen_fisico_recien_nacido_id'], 
            $this['created_by'], $this['updated_by'], $this['motivo_anulacion']);
  }
}
