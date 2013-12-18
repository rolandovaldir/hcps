<?php

/**
 * AdministracionMedicamento form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AdministracionMedicamentoForm extends BaseAdministracionMedicamentoForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget("internado_id", new sfWidgetFormInputHidden());
      $this->widgetSchema['tipo'] = new sfWidgetFormChoice(array('choices'  => AdministracionMedicamentoTable::getDescripciones_tipo(),'expanded' => true));
  }
}
