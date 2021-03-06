<?php

/**
 * SolicitudTransfusionSanguinea form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SolicitudTransfusionSanguineaForm extends BaseSolicitudTransfusionSanguineaForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by'], $this['motivo_anulacion']);
      
      $this->widgetSchema['internado_id'] = new sfWidgetFormInputHidden();
      $this->widgetSchema['requiere_transfusion_de'] = new sfWidgetFormChoice(array('choices'  => SolicitudTransfusionSanguineaTable::getDescripciones_requiereTransfusionDe(),'expanded' => FALSE));
      $this->widgetSchema['cumplirse_enforma'] = new sfWidgetFormChoice(array('choices'  => SolicitudTransfusionSanguineaTable::getDescripciones_cumplirseEnforma(),'expanded' => FALSE));
      
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
}
