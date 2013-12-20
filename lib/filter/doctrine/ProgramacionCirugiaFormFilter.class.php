<?php

/**
 * ProgramacionCirugia filter form.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProgramacionCirugiaFormFilter extends BaseProgramacionCirugiaFormFilter
{
  public function configure()
  {
      $this->widgetSchema['examenes_auxiliares'] = new sfWidgetFormChoice(array('choices'  => ProgramacionCirugiaTable::getDescripciones_examen_auxiliar(),'expanded' => true));
  }
}
