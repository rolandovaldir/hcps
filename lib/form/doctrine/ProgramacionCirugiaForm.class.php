<?php

/**
 * ProgramacionCirugia form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProgramacionCirugiaForm extends BaseProgramacionCirugiaForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at']);
        $this->setWidget("internado_id", new sfWidgetFormInputHidden());
        $this->widgetSchema['examenes_auxiliares'] = new sfWidgetFormChoice(array('choices'  => ProgramacionCirugiaTable::getDescripciones_examen_auxiliar(),'expanded' => true, 'multiple'=>true));
    }
}
