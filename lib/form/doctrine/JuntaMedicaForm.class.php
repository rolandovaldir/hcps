<?php

/**
 * JuntaMedica form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JuntaMedicaForm extends BaseJuntaMedicaForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      
      $this->widgetSchema['internado_id'] = new sfWidgetFormInputHidden();
      
      $medico = new MedicoParticipante();
      $medico->setJuntaMedica($this->object);
      $medicoForm = new MedicoParticipanteForm($medico);
      $this->embedForm('medico', $medicoForm);

  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
  protected function doBind(array $values) {

    if ('' === trim($values['medico']['nombre']) AND
        '' === trim($values['medico']['especialidad']) AND
        '' === trim($values['medico']['cargo'])) {
      $this->validatorSchema['medico'] = new sfValidatorPass();
    }
    parent::doBind($values);
  }
}
