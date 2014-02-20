<?php

/**
 * UsoHospitalario form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsoHospitalarioForm extends BaseUsoHospitalarioForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by'], $this['motivo_anulacion']);
      $this->setWidget("internado_id", new sfWidgetFormInputHidden());   
      $this->incluirDetalles();
  }
  
  public function incluirDetalles($nombre_campo='detalle')
  {
      $detalle = new DetalleUsoHospitalario();
      $detalle->setUsoHospitalario($this->object);
      $detalleForm = new DetalleUsoHospitalarioForm($detalle);
      $this->embedForm($nombre_campo, $detalleForm);
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
  protected function doBind(array $values) {
    if ('' === trim($values['detalle']['codigo_cbm']) AND
        '' === trim($values['detalle']['detalle']) AND
        '' === trim($values['detalle']['cantidad']) AND
        '' === trim($values['detalle']['unidad']) AND
        '' === trim($values['detalle']['cod_farmacia_ibm'])) {
      $this->validatorSchema['detalle'] = new sfValidatorPass();
    }
    parent::doBind($values);
  }
  
  public function saveEmbeddedForms($con = null, $forms = null) {
    if (null === $con) {
      $con = $this->getConnection();
    }

    if (null === $forms) {
      $detalle = $this->getValue('detalle');
      $forms = $this->embeddedForms;
     
      if ('' === trim($detalle['codigo_cbm']) AND
          '' === trim($detalle['detalle']) AND
          '' === trim($detalle['cantidad']) AND
          '' === trim($detalle['unidad']) AND
          '' === trim($detalle['cod_farmacia_ibm'])) {
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
