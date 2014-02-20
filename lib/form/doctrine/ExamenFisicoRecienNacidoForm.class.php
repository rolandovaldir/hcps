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
      unset($this['created_at'], $this['updated_at'], $this['motivo_anulacion']);
      
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
  
  protected function doBind(array $values) {

    if ('' === trim($values['apgar']['nacer_egresar']) AND
        '' === trim($values['apgar']['apariencia']) AND
        '' === trim($values['apgar']['piel']) AND
        '' === trim($values['apgar']['cabeza']) AND
        '' === trim($values['apgar']['ojos'])AND
        '' === trim($values['apgar']['oidos_nariz_garganta']) AND
        '' === trim($values['apgar']['torax']) AND
        '' === trim($values['apgar']['pulmones']) AND
        '' === trim($values['apgar']['corazon']) AND
        '' === trim($values['apgar']['abdomen']) AND
        '' === trim($values['apgar']['genitales'])AND
        '' === trim($values['apgar']['torso_espina']) AND
        '' === trim($values['apgar']['extremidades']) AND
        '' === trim($values['apgar']['reflejos']) AND
        '' === trim($values['apgar']['ano'])) {
      $this->validatorSchema['apgar'] = new sfValidatorPass();
    }
    parent::doBind($values);
  }
  
  public function saveEmbeddedForms($con = null, $forms = null) {
    if (null === $con) {
      $con = $this->getConnection();
    }

    if (null === $forms) {
      $apgar = $this->getValue('apgar');
      $forms = $this->embeddedForms;
     
      if ('' === trim($apgar['nacer_egresar']) AND
          '' === trim($apgar['apariencia']) AND
          '' === trim($apgar['piel']) AND
          '' === trim($apgar['cabeza']) AND
          '' === trim($apgar['ojos']) AND
          '' === trim($apgar['oidos_nariz_garganta']) AND
          '' === trim($apgar['torax']) AND
          '' === trim($apgar['pulmones']) AND
          '' === trim($apgar['corazon']) AND
          '' === trim($apgar['abdomen']) AND
          '' === trim($apgar['genitales'])AND
          '' === trim($apgar['torso_espina']) AND
          '' === trim($apgar['extremidades']) AND
          '' === trim($apgar['reflejos']) AND
          '' === trim($apgar['ano'])) {
          unset($forms['apgar']);
      }
    }

    foreach ($forms as $form) {
      if ($form instanceof sfFormObject) {
        $form->saveEmbeddedForms($con);
        $form->getObject()->save($con);
      } else {
        $this->saveEmbeddedForms($con, $form->getEmbeddedForms());
      }
    }
  }

}
