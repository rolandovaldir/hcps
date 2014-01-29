<?php

/**
 * MedicoParticipante form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MedicoParticipanteForm extends BaseMedicoParticipanteForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['junta_medica_id']);
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
}
