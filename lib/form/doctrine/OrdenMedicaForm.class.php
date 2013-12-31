<?php

/**
 * OrdenMedica form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OrdenMedicaForm extends BaseOrdenMedicaForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      
      $this->widgetSchema['internado_id'] = new sfWidgetFormInputHidden();
      $this->setWidget("fecha_hora", new myWidgetFormDojoDateTime());
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
}
