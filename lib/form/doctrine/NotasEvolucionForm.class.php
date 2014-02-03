<?php

/**
 * NotasEvolucion form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NotasEvolucionForm extends BaseNotasEvolucionForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      
      $this->widgetSchema['internado_id'] = new sfWidgetFormInputHidden();
  }
  
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
}
