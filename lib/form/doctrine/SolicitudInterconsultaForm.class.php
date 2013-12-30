<?php

/**
 * SolicitudInterconsulta form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SolicitudInterconsultaForm extends BaseSolicitudInterconsultaForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      
      $this->widgetSchema['internado_id'] = new sfWidgetFormInputHidden();
      
      $detalle_medicacion = new DetalleMedicacion();
      $detalle_medicacion->setSolicitudInterconsulta($this->object);
      $detalle_medicacion_form = new DetalleMedicacionForm($detalle_medicacion);
      $this->embedForm('medicacion', $detalle_medicacion_form);
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
}
