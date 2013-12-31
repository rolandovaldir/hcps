<?php

/**
 * ResumenAlta form base class.
 *
 * @method ResumenAlta getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseResumenAltaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'internado_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'medico_id'                => new myWidgetFormDojoInteger(),
      'servicio'                 => new sfWidgetFormInputText(),
      'servicio_egreso'          => new sfWidgetFormInputText(),
      'diagnostico_provisional'  => new sfWidgetFormTextarea(),
      'diagnostico_definitivo'   => new sfWidgetFormTextarea(),
      'operaciones'              => new sfWidgetFormTextarea(),
      'anamnesis_examfisico'     => new sfWidgetFormTextarea(),
      'hallazgos_lab_rayx'       => new sfWidgetFormTextarea(),
      'evolucion_complicacion'   => new sfWidgetFormTextarea(),
      'cond_trat_ref_pronostico' => new sfWidgetFormTextarea(),
      'fecha'                    => new myWidgetFormDojoDate(),
      'created_at'               => new myWidgetFormDojoDateTime(),
      'updated_at'               => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'medico_id'                => new sfValidatorInteger(array('required' => false)),
      'servicio'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'servicio_egreso'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'diagnostico_provisional'  => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'diagnostico_definitivo'   => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'operaciones'              => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'anamnesis_examfisico'     => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'hallazgos_lab_rayx'       => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'evolucion_complicacion'   => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'cond_trat_ref_pronostico' => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'fecha'                    => new myValidatorDojoDate(array('required' => false)),
      'created_at'               => new myValidatorDojoDateTime(),
      'updated_at'               => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('resumen_alta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResumenAlta';
  }

}
