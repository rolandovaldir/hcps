<?php

/**
 * SolicitudReposicionMaterial form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SolicitudReposicionMaterialForm extends BaseSolicitudReposicionMaterialForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by'], $this['motivo_borrado'], $this['tipo_borrado']);
      
      $this->widgetSchema['internado_id'] = new sfWidgetFormInputHidden();
            
      $detalle = new DetalleMaterial();
      $detalle->setSolicitudReposicionMaterial($this->object);
      $detalleForm = new DetalleMaterialForm($detalle);
      $this->embedForm('detalle', $detalleForm);  
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
  protected function doBind(array $values) {

    if ('' === trim($values['detalle']['codigo']) AND
        '' === trim($values['detalle']['descripcion']) AND
        '' === trim($values['detalle']['unidad']) AND
        '' === trim($values['detalle']['saldo_anterior']) AND
        '' === trim($values['detalle']['reposicion_solicitada']) AND
        '' === trim($values['detalle']['saldo_actual'])) {
      $this->validatorSchema['detalle'] = new sfValidatorPass();
    }
    parent::doBind($values);
  }

  public function saveEmbeddedForms($con = null, $forms = null) {
    if (null === $con) {
      $con = $this->getConnection();
    }

    // step 3.2
    if (null === $forms) {
      $detalle = $this->getValue('detalle');
      $forms = $this->embeddedForms;
     
      if ('' === trim($detalle['codigo']) AND
          '' === trim($detalle['descripcion']) AND
          '' === trim($detalle['unidad'])AND
          '' === trim($detalle['saldo_anterior']) AND
          '' === trim($detalle['reposicion_solicitada']) AND
          '' === trim($detalle['saldo_actual'])) {
          unset($forms['detalle']);
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