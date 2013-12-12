<?php

/**
 * DetalleAdminMedicamento form base class.
 *
 * @method DetalleAdminMedicamento getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleAdminMedicamentoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                            => new sfWidgetFormInputHidden(),
      'administracion_medicamento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdministracionMedicamento'), 'add_empty' => false)),
      'enfermera_id'                  => new sfWidgetFormInputText(),
      'medicamento_solucion'          => new sfWidgetFormInputText(),
      'tipo'                          => new sfWidgetFormInputText(),
      'fecha'                         => new myWidgetFormDojoDate(),
      'horario'                       => new myWidgetFormDojoTime(),
      'created_at'                    => new myWidgetFormDojoDateTime(),
      'updated_at'                    => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'administracion_medicamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdministracionMedicamento'))),
      'enfermera_id'                  => new sfValidatorInteger(array('required' => false)),
      'medicamento_solucion'          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'tipo'                          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fecha'                         => new sfValidatorDate(array('required' => false)),
      'horario'                       => new sfValidatorTime(array('required' => false)),
      'created_at'                    => new sfValidatorDateTime(),
      'updated_at'                    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_admin_medicamento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleAdminMedicamento';
  }

}
