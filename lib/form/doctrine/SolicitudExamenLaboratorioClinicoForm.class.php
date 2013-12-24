<?php

/**
 * SolicitudExamenLaboratorioClinico form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SolicitudExamenLaboratorioClinicoForm extends BaseSolicitudExamenLaboratorioClinicoForm
{
  public function configure()
  {
      $this->setWidget("internado_id", new sfWidgetFormInputHidden());
      $this->widgetSchema['tipo_examen_laboratorio_clinico_list'] = new sfWidgetFormChoice(array('choices'  => TipoExamenLaboratorioClinicoTable::getExamenesActivosForChoice(),'expanded' => true, 'multiple'=>true, 'renderer_options'=>array('separator'=>'', 'template' => '<div class="group_title">%group%</div>%options%')));
  }
}
