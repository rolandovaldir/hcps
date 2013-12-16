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
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget("internado_id", new sfWidgetFormInputHidden());
      $this->widgetSchema['requiere_transfusion_de'] = new sfWidgetFormChoice(array('choices'  => SolicitudTransfusionSanguineaTable::getDescripciones_requiere_transfusion_de(),'expanded' => true));
      $this->widgetSchema['cumplirse_enforma'] = new sfWidgetFormChoice(array('choices'  => SolicitudTransfusionSanguineaTable::getDescripciones_cumplirse_enforma(),'expanded' => true));
      
  }
}
