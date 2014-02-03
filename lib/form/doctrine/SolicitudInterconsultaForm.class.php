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
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      
      $this->widgetSchema['internado_id'] = new sfWidgetFormInputHidden();
      
      $detalle_medicacion = new DetalleMedicacion();
      $detalle_medicacion->setSolicitudInterconsulta($this->object);
      $detalleMedicacionForm = new DetalleMedicacionForm($detalle_medicacion);
      $this->embedForm('medicacion', $detalleMedicacionForm);
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
  protected function doBind(array $values) {

    if ('' === trim($values['medicacion']['medicacion_utilizada']) AND
        '' === trim($values['medicacion']['dosis']) AND
        '' === trim($values['medicacion']['fecha_inicio'])) {
      $this->validatorSchema['medicacion'] = new sfValidatorPass();
    }
    parent::doBind($values);
  }

  public function saveEmbeddedForms($con = null, $forms = null) {
    if (null === $con) {
      $con = $this->getConnection();
    }

    // step 3.2
    if (null === $forms) {
      $detalle_medicacion = $this->getValue('medicacion');
      $forms = $this->embeddedForms;
     
      if ('' === trim($detalle_medicacion['medicacion_utilizada']) AND
          '' === trim($detalle_medicacion['dosis']) AND
          '' === trim($detalle_medicacion['fecha_inicio'])) {
          unset($forms['medicacion']);
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
