<?php

/**
 * AtencionEnfermeria form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AtencionEnfermeriaForm extends BaseAtencionEnfermeriaForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['file_internacion_id']);
      $this->setWidget("internado_id", new sfWidgetFormInputHidden());
      $this->widgetSchema['per_apariencia_gral_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['per_habitos_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['per_alergias_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['per_inmunizaciones_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['per_medicacion_actual_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      
  }
}
