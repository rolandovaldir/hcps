<?php

/**
 * ExamenFisicoRecienNacido form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ExamenFisicoRecienNacidoForm extends BaseExamenFisicoRecienNacidoForm
{
    
    protected static $sexo = array(
                                    'masculino' => 'Masculino',
                                    'femenino'  => 'Femenino');
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      
      $this->widgetSchema['internado_id'] = new sfWidgetFormInputHidden();
      $this->widgetSchema['sexo'] = new sfWidgetFormChoice(array('choices' => self::$sexo, 'expanded' => true));
      
      $apgar = new Apgar();
      $apgar->setExamenFisicoRecienNacido($this->object);
      $apgarForm = new ApgarForm($apgar);
      $this->embedForm('apgar', $apgarForm);
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
}
