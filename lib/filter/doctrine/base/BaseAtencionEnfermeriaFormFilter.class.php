<?php

/**
 * AtencionEnfermeria filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAtencionEnfermeriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'                          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'enfermera_id'                          => new sfWidgetFormFilterInput(),
      'medico_id'                             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Medico'), 'add_empty' => true)),
      'diagnostico_medico'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_ingreso'                         => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'acompano_por'                          => new sfWidgetFormFilterInput(),
      'estado'                                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'derivado_de'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'especificar_derivado'                  => new sfWidgetFormFilterInput(),
      'cuidador_principal'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'especificar_cuidador'                  => new sfWidgetFormFilterInput(),
      'edad'                                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'peso'                                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'talla'                                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sexo'                                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'temperatura'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pulso'                                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'respiracion'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'presion_arterial'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'per_apariencia_gral_esc'               => new sfWidgetFormFilterInput(),
      'per_apariencia_gral_val'               => new sfWidgetFormFilterInput(),
      'per_habitos_esc'                       => new sfWidgetFormFilterInput(),
      'per_habitos_val'                       => new sfWidgetFormFilterInput(),
      'per_alergias_esc'                      => new sfWidgetFormFilterInput(),
      'per_alergias_val'                      => new sfWidgetFormFilterInput(),
      'per_inmunizaciones_esc'                => new sfWidgetFormFilterInput(),
      'per_inmunizaciones_val'                => new sfWidgetFormFilterInput(),
      'per_medicacion_actual_esc'             => new sfWidgetFormFilterInput(),
      'per_medicacion_actual_val'             => new sfWidgetFormFilterInput(),
      'motivo_ingreso'                        => new sfWidgetFormFilterInput(),
      'nutmet_higiene_esc'                    => new sfWidgetFormFilterInput(),
      'nutmet_higiene_val'                    => new sfWidgetFormFilterInput(),
      'nutmet_estado_nutricional_esc'         => new sfWidgetFormFilterInput(),
      'nutmet_estado_nutricional_val'         => new sfWidgetFormFilterInput(),
      'nutmet_protesis_dental_esc'            => new sfWidgetFormFilterInput(),
      'nutmet_protesis_dental_val'            => new sfWidgetFormFilterInput(),
      'nutmet_liquidos_electrolitos_esc'      => new sfWidgetFormFilterInput(),
      'nutmet_liquidos_electrolitos_val'      => new sfWidgetFormFilterInput(),
      'patelim_habito_intestinal_esc'         => new sfWidgetFormFilterInput(),
      'patelim_habito_intestinal_val'         => new sfWidgetFormFilterInput(),
      'patelim_habito_urinario_esc'           => new sfWidgetFormFilterInput(),
      'patelim_habito_urinario_val'           => new sfWidgetFormFilterInput(),
      'acteje_valoracion_cardiopulmonar_esc'  => new sfWidgetFormFilterInput(),
      'acteje_valoracion_cardiopulmonar_val'  => new sfWidgetFormFilterInput(),
      'acteje_capacidad_motora_esc'           => new sfWidgetFormFilterInput(),
      'acteje_capacidad_motora_val'           => new sfWidgetFormFilterInput(),
      'acteje_act_diversion_esc'              => new sfWidgetFormFilterInput(),
      'acteje_act_diversion_val'              => new sfWidgetFormFilterInput(),
      'acteje_deficit_autocuidado_esc'        => new sfWidgetFormFilterInput(),
      'acteje_deficit_autocuidado_val'        => new sfWidgetFormFilterInput(),
      'acteje_crecim_desarrollo_esc'          => new sfWidgetFormFilterInput(),
      'acteje_crecim_desarrollo_val'          => new sfWidgetFormFilterInput(),
      'des_habito_descanso_esc'               => new sfWidgetFormFilterInput(),
      'des_habito_descanso_val'               => new sfWidgetFormFilterInput(),
      'des_transtorno_sueno_esc'              => new sfWidgetFormFilterInput(),
      'des_transtorno_sueno_val'              => new sfWidgetFormFilterInput(),
      'cogper_alter_sensoriales_esc'          => new sfWidgetFormFilterInput(),
      'cogper_alter_sensoriales_val'          => new sfWidgetFormFilterInput(),
      'cogper_nivel_conciencia_esc'           => new sfWidgetFormFilterInput(),
      'cogper_nivel_conciencia_val'           => new sfWidgetFormFilterInput(),
      'cogper_alteracion_promentales_esc'     => new sfWidgetFormFilterInput(),
      'cogper_alteracion_promentales_val'     => new sfWidgetFormFilterInput(),
      'auto_reaccion_emocional_esc'           => new sfWidgetFormFilterInput(),
      'auto_reaccion_emocional_val'           => new sfWidgetFormFilterInput(),
      'relrol_relacion_interpersonal_esc'     => new sfWidgetFormFilterInput(),
      'relrol_relacion_interpersonal_val'     => new sfWidgetFormFilterInput(),
      'relrol_conducta_familia_esc'           => new sfWidgetFormFilterInput(),
      'relrol_conducta_familia_val'           => new sfWidgetFormFilterInput(),
      'relrol_cambio_personalfamiliar_esc'    => new sfWidgetFormFilterInput(),
      'relrol_cambio_personalfamiliar_val'    => new sfWidgetFormFilterInput(),
      'repsex_alteracion_sisreproductivo_esc' => new sfWidgetFormFilterInput(),
      'repsex_alteracion_sisreproductivo_val' => new sfWidgetFormFilterInput(),
      'capstr_relpaciente_enfermedad_esc'     => new sfWidgetFormFilterInput(),
      'capstr_relpaciente_enfermedad_val'     => new sfWidgetFormFilterInput(),
      'capstr_relfamilia_enfermedad_esc'      => new sfWidgetFormFilterInput(),
      'capstr_relfamilia_enfermedad_val'      => new sfWidgetFormFilterInput(),
      'creencia_religiosa'                    => new sfWidgetFormFilterInput(),
      'diagnostico_enfermera'                 => new sfWidgetFormFilterInput(),
      'created_at'                            => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'                            => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'created_by'                            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'motivo_anulacion'                      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'internado_id'                          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'enfermera_id'                          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medico_id'                             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Medico'), 'column' => 'id')),
      'diagnostico_medico'                    => new sfValidatorPass(array('required' => false)),
      'fecha_ingreso'                         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'acompano_por'                          => new sfValidatorPass(array('required' => false)),
      'estado'                                => new sfValidatorPass(array('required' => false)),
      'derivado_de'                           => new sfValidatorPass(array('required' => false)),
      'especificar_derivado'                  => new sfValidatorPass(array('required' => false)),
      'cuidador_principal'                    => new sfValidatorPass(array('required' => false)),
      'especificar_cuidador'                  => new sfValidatorPass(array('required' => false)),
      'edad'                                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'peso'                                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'talla'                                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sexo'                                  => new sfValidatorPass(array('required' => false)),
      'temperatura'                           => new sfValidatorPass(array('required' => false)),
      'pulso'                                 => new sfValidatorPass(array('required' => false)),
      'respiracion'                           => new sfValidatorPass(array('required' => false)),
      'presion_arterial'                      => new sfValidatorPass(array('required' => false)),
      'per_apariencia_gral_esc'               => new sfValidatorPass(array('required' => false)),
      'per_apariencia_gral_val'               => new sfValidatorPass(array('required' => false)),
      'per_habitos_esc'                       => new sfValidatorPass(array('required' => false)),
      'per_habitos_val'                       => new sfValidatorPass(array('required' => false)),
      'per_alergias_esc'                      => new sfValidatorPass(array('required' => false)),
      'per_alergias_val'                      => new sfValidatorPass(array('required' => false)),
      'per_inmunizaciones_esc'                => new sfValidatorPass(array('required' => false)),
      'per_inmunizaciones_val'                => new sfValidatorPass(array('required' => false)),
      'per_medicacion_actual_esc'             => new sfValidatorPass(array('required' => false)),
      'per_medicacion_actual_val'             => new sfValidatorPass(array('required' => false)),
      'motivo_ingreso'                        => new sfValidatorPass(array('required' => false)),
      'nutmet_higiene_esc'                    => new sfValidatorPass(array('required' => false)),
      'nutmet_higiene_val'                    => new sfValidatorPass(array('required' => false)),
      'nutmet_estado_nutricional_esc'         => new sfValidatorPass(array('required' => false)),
      'nutmet_estado_nutricional_val'         => new sfValidatorPass(array('required' => false)),
      'nutmet_protesis_dental_esc'            => new sfValidatorPass(array('required' => false)),
      'nutmet_protesis_dental_val'            => new sfValidatorPass(array('required' => false)),
      'nutmet_liquidos_electrolitos_esc'      => new sfValidatorPass(array('required' => false)),
      'nutmet_liquidos_electrolitos_val'      => new sfValidatorPass(array('required' => false)),
      'patelim_habito_intestinal_esc'         => new sfValidatorPass(array('required' => false)),
      'patelim_habito_intestinal_val'         => new sfValidatorPass(array('required' => false)),
      'patelim_habito_urinario_esc'           => new sfValidatorPass(array('required' => false)),
      'patelim_habito_urinario_val'           => new sfValidatorPass(array('required' => false)),
      'acteje_valoracion_cardiopulmonar_esc'  => new sfValidatorPass(array('required' => false)),
      'acteje_valoracion_cardiopulmonar_val'  => new sfValidatorPass(array('required' => false)),
      'acteje_capacidad_motora_esc'           => new sfValidatorPass(array('required' => false)),
      'acteje_capacidad_motora_val'           => new sfValidatorPass(array('required' => false)),
      'acteje_act_diversion_esc'              => new sfValidatorPass(array('required' => false)),
      'acteje_act_diversion_val'              => new sfValidatorPass(array('required' => false)),
      'acteje_deficit_autocuidado_esc'        => new sfValidatorPass(array('required' => false)),
      'acteje_deficit_autocuidado_val'        => new sfValidatorPass(array('required' => false)),
      'acteje_crecim_desarrollo_esc'          => new sfValidatorPass(array('required' => false)),
      'acteje_crecim_desarrollo_val'          => new sfValidatorPass(array('required' => false)),
      'des_habito_descanso_esc'               => new sfValidatorPass(array('required' => false)),
      'des_habito_descanso_val'               => new sfValidatorPass(array('required' => false)),
      'des_transtorno_sueno_esc'              => new sfValidatorPass(array('required' => false)),
      'des_transtorno_sueno_val'              => new sfValidatorPass(array('required' => false)),
      'cogper_alter_sensoriales_esc'          => new sfValidatorPass(array('required' => false)),
      'cogper_alter_sensoriales_val'          => new sfValidatorPass(array('required' => false)),
      'cogper_nivel_conciencia_esc'           => new sfValidatorPass(array('required' => false)),
      'cogper_nivel_conciencia_val'           => new sfValidatorPass(array('required' => false)),
      'cogper_alteracion_promentales_esc'     => new sfValidatorPass(array('required' => false)),
      'cogper_alteracion_promentales_val'     => new sfValidatorPass(array('required' => false)),
      'auto_reaccion_emocional_esc'           => new sfValidatorPass(array('required' => false)),
      'auto_reaccion_emocional_val'           => new sfValidatorPass(array('required' => false)),
      'relrol_relacion_interpersonal_esc'     => new sfValidatorPass(array('required' => false)),
      'relrol_relacion_interpersonal_val'     => new sfValidatorPass(array('required' => false)),
      'relrol_conducta_familia_esc'           => new sfValidatorPass(array('required' => false)),
      'relrol_conducta_familia_val'           => new sfValidatorPass(array('required' => false)),
      'relrol_cambio_personalfamiliar_esc'    => new sfValidatorPass(array('required' => false)),
      'relrol_cambio_personalfamiliar_val'    => new sfValidatorPass(array('required' => false)),
      'repsex_alteracion_sisreproductivo_esc' => new sfValidatorPass(array('required' => false)),
      'repsex_alteracion_sisreproductivo_val' => new sfValidatorPass(array('required' => false)),
      'capstr_relpaciente_enfermedad_esc'     => new sfValidatorPass(array('required' => false)),
      'capstr_relpaciente_enfermedad_val'     => new sfValidatorPass(array('required' => false)),
      'capstr_relfamilia_enfermedad_esc'      => new sfValidatorPass(array('required' => false)),
      'capstr_relfamilia_enfermedad_val'      => new sfValidatorPass(array('required' => false)),
      'creencia_religiosa'                    => new sfValidatorPass(array('required' => false)),
      'diagnostico_enfermera'                 => new sfValidatorPass(array('required' => false)),
      'created_at'                            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'                            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'                            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
      'motivo_anulacion'                      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('atencion_enfermeria_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AtencionEnfermeria';
  }

  public function getFields()
  {
    return array(
      'id'                                    => 'Number',
      'internado_id'                          => 'ForeignKey',
      'enfermera_id'                          => 'Number',
      'medico_id'                             => 'ForeignKey',
      'diagnostico_medico'                    => 'Text',
      'fecha_ingreso'                         => 'Date',
      'acompano_por'                          => 'Text',
      'estado'                                => 'Text',
      'derivado_de'                           => 'Text',
      'especificar_derivado'                  => 'Text',
      'cuidador_principal'                    => 'Text',
      'especificar_cuidador'                  => 'Text',
      'edad'                                  => 'Number',
      'peso'                                  => 'Number',
      'talla'                                 => 'Number',
      'sexo'                                  => 'Text',
      'temperatura'                           => 'Text',
      'pulso'                                 => 'Text',
      'respiracion'                           => 'Text',
      'presion_arterial'                      => 'Text',
      'per_apariencia_gral_esc'               => 'Text',
      'per_apariencia_gral_val'               => 'Text',
      'per_habitos_esc'                       => 'Text',
      'per_habitos_val'                       => 'Text',
      'per_alergias_esc'                      => 'Text',
      'per_alergias_val'                      => 'Text',
      'per_inmunizaciones_esc'                => 'Text',
      'per_inmunizaciones_val'                => 'Text',
      'per_medicacion_actual_esc'             => 'Text',
      'per_medicacion_actual_val'             => 'Text',
      'motivo_ingreso'                        => 'Text',
      'nutmet_higiene_esc'                    => 'Text',
      'nutmet_higiene_val'                    => 'Text',
      'nutmet_estado_nutricional_esc'         => 'Text',
      'nutmet_estado_nutricional_val'         => 'Text',
      'nutmet_protesis_dental_esc'            => 'Text',
      'nutmet_protesis_dental_val'            => 'Text',
      'nutmet_liquidos_electrolitos_esc'      => 'Text',
      'nutmet_liquidos_electrolitos_val'      => 'Text',
      'patelim_habito_intestinal_esc'         => 'Text',
      'patelim_habito_intestinal_val'         => 'Text',
      'patelim_habito_urinario_esc'           => 'Text',
      'patelim_habito_urinario_val'           => 'Text',
      'acteje_valoracion_cardiopulmonar_esc'  => 'Text',
      'acteje_valoracion_cardiopulmonar_val'  => 'Text',
      'acteje_capacidad_motora_esc'           => 'Text',
      'acteje_capacidad_motora_val'           => 'Text',
      'acteje_act_diversion_esc'              => 'Text',
      'acteje_act_diversion_val'              => 'Text',
      'acteje_deficit_autocuidado_esc'        => 'Text',
      'acteje_deficit_autocuidado_val'        => 'Text',
      'acteje_crecim_desarrollo_esc'          => 'Text',
      'acteje_crecim_desarrollo_val'          => 'Text',
      'des_habito_descanso_esc'               => 'Text',
      'des_habito_descanso_val'               => 'Text',
      'des_transtorno_sueno_esc'              => 'Text',
      'des_transtorno_sueno_val'              => 'Text',
      'cogper_alter_sensoriales_esc'          => 'Text',
      'cogper_alter_sensoriales_val'          => 'Text',
      'cogper_nivel_conciencia_esc'           => 'Text',
      'cogper_nivel_conciencia_val'           => 'Text',
      'cogper_alteracion_promentales_esc'     => 'Text',
      'cogper_alteracion_promentales_val'     => 'Text',
      'auto_reaccion_emocional_esc'           => 'Text',
      'auto_reaccion_emocional_val'           => 'Text',
      'relrol_relacion_interpersonal_esc'     => 'Text',
      'relrol_relacion_interpersonal_val'     => 'Text',
      'relrol_conducta_familia_esc'           => 'Text',
      'relrol_conducta_familia_val'           => 'Text',
      'relrol_cambio_personalfamiliar_esc'    => 'Text',
      'relrol_cambio_personalfamiliar_val'    => 'Text',
      'repsex_alteracion_sisreproductivo_esc' => 'Text',
      'repsex_alteracion_sisreproductivo_val' => 'Text',
      'capstr_relpaciente_enfermedad_esc'     => 'Text',
      'capstr_relpaciente_enfermedad_val'     => 'Text',
      'capstr_relfamilia_enfermedad_esc'      => 'Text',
      'capstr_relfamilia_enfermedad_val'      => 'Text',
      'creencia_religiosa'                    => 'Text',
      'diagnostico_enfermera'                 => 'Text',
      'created_at'                            => 'Date',
      'updated_at'                            => 'Date',
      'created_by'                            => 'ForeignKey',
      'updated_by'                            => 'ForeignKey',
      'motivo_anulacion'                      => 'Text',
    );
  }
}
