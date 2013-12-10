<?php

/**
 * Internado form base class.
 *
 * @method Internado getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseInternadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'afiliado_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Afiliado'), 'add_empty' => true)),
      'noAfiliado_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PacienteOtroseguro'), 'add_empty' => true)),
      'categoria_id'            => new sfWidgetFormInputText(),
      'cama_id'                 => new sfWidgetFormInputText(),
      'medico_id'               => new sfWidgetFormInputText(),
      'medico_consulta_id'      => new sfWidgetFormInputText(),
      'medico_referencia_id'    => new sfWidgetFormInputText(),
      'formulario_referencia'   => new sfWidgetFormInputText(),
      'diagnostico'             => new sfWidgetFormTextarea(),
      'procedencia'             => new sfWidgetFormTextarea(),
      'medio_referencia'        => new sfWidgetFormInputText(),
      'observaciones'           => new sfWidgetFormTextarea(),
      'fecha'                   => new myWidgetFormDojoDate(),
      'hora'                    => new sfWidgetFormTime(),
      'conducto'                => new sfWidgetFormTextarea(),
      'es_afiliado'             => new sfWidgetFormInputCheckbox(),
      'alta'                    => new sfWidgetFormInputCheckbox(),
      'altaFecha'               => new myWidgetFormDojoDate(),
      'altaHora'                => new sfWidgetFormTime(),
      'diagnostico_alta'        => new sfWidgetFormTextarea(),
      'tratamientio'            => new sfWidgetFormInputText(),
      'lugar_referencia_salida' => new sfWidgetFormInputText(),
      'medio_referencia_salida' => new sfWidgetFormInputText(),
      'motivo_refe_retorno'     => new sfWidgetFormInputText(),
      'created_at'              => new sfWidgetFormDateTime(),
      'updated_at'              => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'afiliado_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Afiliado'), 'required' => false)),
      'noAfiliado_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PacienteOtroseguro'), 'required' => false)),
      'categoria_id'            => new sfValidatorInteger(),
      'cama_id'                 => new sfValidatorInteger(array('required' => false)),
      'medico_id'               => new sfValidatorInteger(),
      'medico_consulta_id'      => new sfValidatorInteger(),
      'medico_referencia_id'    => new sfValidatorInteger(),
      'formulario_referencia'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'diagnostico'             => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'procedencia'             => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'medio_referencia'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'observaciones'           => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'fecha'                   => new sfValidatorDate(array('required' => false)),
      'hora'                    => new sfValidatorTime(array('required' => false)),
      'conducto'                => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'es_afiliado'             => new sfValidatorBoolean(array('required' => false)),
      'alta'                    => new sfValidatorBoolean(array('required' => false)),
      'altaFecha'               => new sfValidatorDate(),
      'altaHora'                => new sfValidatorTime(),
      'diagnostico_alta'        => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'tratamientio'            => new sfValidatorString(array('max_length' => 200)),
      'lugar_referencia_salida' => new sfValidatorString(array('max_length' => 200)),
      'medio_referencia_salida' => new sfValidatorString(array('max_length' => 200)),
      'motivo_refe_retorno'     => new sfValidatorString(array('max_length' => 200)),
      'created_at'              => new sfValidatorDateTime(),
      'updated_at'              => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('internado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Internado';
  }

}
