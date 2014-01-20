<?php

/**
 * UsoHospitalario form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsoHospitalarioForm extends BaseUsoHospitalarioForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget("internado_id", new sfWidgetFormInputHidden());   
      $this->incluirDetalles();
  }
  
  public function incluirDetalles($nombre_campo='detalle')
  {
      $detalle = new DetalleUsoHospitalario();
      $detalle->setUsoHospitalario($this->object);
      $detalleForm = new DetalleUsoHospitalarioForm($detalle);
      $this->embedForm($nombre_campo, $detalleForm);
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
  
}
