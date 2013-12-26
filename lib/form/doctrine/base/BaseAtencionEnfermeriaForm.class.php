<?php

/**
 * AtencionEnfermeria form base class.
 *
 * @method AtencionEnfermeria getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAtencionEnfermeriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                    => new sfWidgetFormInputHidden(),
      'internado_id'                          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'enfermera_id'                          => new sfWidgetFormInputText(),
      'lugar'                                 => new sfWidgetFormInputText(),
      'codigo'                                => new sfWidgetFormInputText(),
      'especialidad'                          => new sfWidgetFormInputText(),
      'per_apariencia_gral_esc'               => new sfWidgetFormInputText(),
      'per_apariencia_gral_val'               => new sfWidgetFormInputText(),
      'per_habitos_esc'                       => new sfWidgetFormInputText(),
      'per_habitos_val'                       => new sfWidgetFormInputText(),
      'per_alergias_esc'                      => new sfWidgetFormInputText(),
      'per_alergias_val'                      => new sfWidgetFormInputText(),
      'per_inmunizaciones_esc'                => new sfWidgetFormInputText(),
      'per_inmunizaciones_val'                => new sfWidgetFormInputText(),
      'per_medicacion_actual_esc'             => new sfWidgetFormInputText(),
      'per_medicacion_actual_val'             => new sfWidgetFormInputText(),
      'motivo_ingreso'                        => new sfWidgetFormTextarea(),
      'nutmet_higiene_esc'                    => new sfWidgetFormInputText(),
      'nutmet_higiene_val'                    => new sfWidgetFormInputText(),
      'nutmet_estado_nutricional_esc'         => new sfWidgetFormInputText(),
      'nutmet_estado_nutricional_val'         => new sfWidgetFormInputText(),
      'nutmet_protesis_dental_esc'            => new sfWidgetFormInputText(),
      'nutmet_protesis_dental_val'            => new sfWidgetFormInputText(),
      'nutmet_liquidos_electrolitos_esc'      => new sfWidgetFormInputText(),
      'nutmet_liquidos_electrolitos_val'      => new sfWidgetFormInputText(),
      'patelim_habito_intestinal_esc'         => new sfWidgetFormInputText(),
      'patelim_habito_intestinal_val'         => new sfWidgetFormInputText(),
      'patelim_habito_urinario_esc'           => new sfWidgetFormInputText(),
      'patelim_habito_urinario_val'           => new sfWidgetFormInputText(),
      'acteje_valoracion_cardiopulmonar_esc'  => new sfWidgetFormInputText(),
      'acteje_valoracion_cardiopulmonar_val'  => new sfWidgetFormInputText(),
      'acteje_capacidad_motora_esc'           => new sfWidgetFormInputText(),
      'acteje_capacidad_motora_val'           => new sfWidgetFormInputText(),
      'acteje_act_diversion_esc'              => new sfWidgetFormInputText(),
      'acteje_act_diversion_val'              => new sfWidgetFormInputText(),
      'acteje_deficit_autocuidado_esc'        => new sfWidgetFormInputText(),
      'acteje_deficit_autocuidado_val'        => new sfWidgetFormInputText(),
      'acteje_crecim_desarrollo_esc'          => new sfWidgetFormInputText(),
      'acteje_crecim_desarrollo_val'          => new sfWidgetFormInputText(),
      'des_habito_descanso_esc'               => new sfWidgetFormInputText(),
      'des_habito_descanso_val'               => new sfWidgetFormInputText(),
      'des_transtorno_sueno_esc'              => new sfWidgetFormInputText(),
      'des_transtorno_sueno_val'              => new sfWidgetFormInputText(),
      'cogper_alter_sensoriales_esc'          => new sfWidgetFormInputText(),
      'cogper_alter_sensoriales_val'          => new sfWidgetFormInputText(),
      'cogper_nivel_conciencia_esc'           => new sfWidgetFormInputText(),
      'cogper_nivel_conciencia_val'           => new sfWidgetFormInputText(),
      'cogper_alteracion_promentales_esc'     => new sfWidgetFormInputText(),
      'cogper_alteracion_promentales_val'     => new sfWidgetFormInputText(),
      'auto_reaccion_emocional_esc'           => new sfWidgetFormInputText(),
      'auto_reaccion_emocional_val'           => new sfWidgetFormInputText(),
      'relrol_relacion_interpersonal_esc'     => new sfWidgetFormInputText(),
      'relrol_relacion_interpersonal_val'     => new sfWidgetFormInputText(),
      'relrol_conducta_familia_esc'           => new sfWidgetFormInputText(),
      'relrol_conducta_familia_val'           => new sfWidgetFormInputText(),
      'relrol_cambio_personalfamiliar_esc'    => new sfWidgetFormInputText(),
      'relrol_cambio_personalfamiliar_val'    => new sfWidgetFormInputText(),
      'repsex_alteracion_sisreproductivo_esc' => new sfWidgetFormInputText(),
      'repsex_alteracion_sisreproductivo_val' => new sfWidgetFormInputText(),
      'capstr_relpaciente_enfermedad_esc'     => new sfWidgetFormInputText(),
      'capstr_relpaciente_enfermedad_val'     => new sfWidgetFormInputText(),
      'creencia_religiosa'                    => new sfWidgetFormInputText(),
      'diagnostico_enfermera'                 => new sfWidgetFormTextarea(),
      'created_at'                            => new sfWidgetFormDateTime(),
      'updated_at'                            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'                          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'required' => false)),
      'enfermera_id'                          => new sfValidatorInteger(array('required' => false)),
      'lugar'                                 => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'codigo'                                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'especialidad'                          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'per_apariencia_gral_esc'               => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'per_apariencia_gral_val'               => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'per_habitos_esc'                       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'per_habitos_val'                       => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'per_alergias_esc'                      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'per_alergias_val'                      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'per_inmunizaciones_esc'                => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'per_inmunizaciones_val'                => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'per_medicacion_actual_esc'             => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'per_medicacion_actual_val'             => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'motivo_ingreso'                        => new sfValidatorString(array('max_length' => 800, 'required' => false)),
      'nutmet_higiene_esc'                    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nutmet_higiene_val'                    => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'nutmet_estado_nutricional_esc'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nutmet_estado_nutricional_val'         => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'nutmet_protesis_dental_esc'            => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nutmet_protesis_dental_val'            => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'nutmet_liquidos_electrolitos_esc'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nutmet_liquidos_electrolitos_val'      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'patelim_habito_intestinal_esc'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'patelim_habito_intestinal_val'         => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'patelim_habito_urinario_esc'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'patelim_habito_urinario_val'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'acteje_valoracion_cardiopulmonar_esc'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'acteje_valoracion_cardiopulmonar_val'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'acteje_capacidad_motora_esc'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'acteje_capacidad_motora_val'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'acteje_act_diversion_esc'              => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'acteje_act_diversion_val'              => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'acteje_deficit_autocuidado_esc'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'acteje_deficit_autocuidado_val'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'acteje_crecim_desarrollo_esc'          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'acteje_crecim_desarrollo_val'          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'des_habito_descanso_esc'               => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'des_habito_descanso_val'               => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'des_transtorno_sueno_esc'              => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'des_transtorno_sueno_val'              => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'cogper_alter_sensoriales_esc'          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cogper_alter_sensoriales_val'          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'cogper_nivel_conciencia_esc'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cogper_nivel_conciencia_val'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'cogper_alteracion_promentales_esc'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cogper_alteracion_promentales_val'     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'auto_reaccion_emocional_esc'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'auto_reaccion_emocional_val'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'relrol_relacion_interpersonal_esc'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'relrol_relacion_interpersonal_val'     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'relrol_conducta_familia_esc'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'relrol_conducta_familia_val'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'relrol_cambio_personalfamiliar_esc'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'relrol_cambio_personalfamiliar_val'    => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'repsex_alteracion_sisreproductivo_esc' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'repsex_alteracion_sisreproductivo_val' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'capstr_relpaciente_enfermedad_esc'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'capstr_relpaciente_enfermedad_val'     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'creencia_religiosa'                    => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'diagnostico_enfermera'                 => new sfValidatorString(array('max_length' => 2500, 'required' => false)),
      'created_at'                            => new sfValidatorDateTime(),
      'updated_at'                            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('atencion_enfermeria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AtencionEnfermeria';
  }

}
