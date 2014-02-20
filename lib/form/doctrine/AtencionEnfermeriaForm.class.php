<?php

/**
 * AtencionEnfermeria form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AtencionEnfermeriaForm extends BaseAtencionEnfermeriaForm
{
    protected static $estado = array(
                                      'caminando'       => 'Caminando',
                                      'silla de ruedas' => 'Silla de ruedas',
                                      'camilla'         => 'Camilla',
                                      'en brazos'       => 'En brazos');

    protected static $derivado = array(
                                        'consulta externa' => 'Consulta externa',
                                        'emergencias'      => 'Emergencia',
                                        'otro'             => 'Otro');
    
    protected static $cuidador = array(
                                        'padres'   => 'Padres',
                                        'empleada' => 'Empleada',
                                        'otro'     => 'Otro');
    
    protected static $sexo = array(
                                    'masculino' => 'Masculino',
                                    'femenino'  => 'Femenino');
    
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['file_internacion_id'],
            $this['created_by'], $this['updated_by'], $this['motivo_anulacion']);
      $this->setWidget("internado_id", new sfWidgetFormInputHidden());
      $this->widgetSchema['estado'] = new sfWidgetFormChoice(array('choices' => self::$estado, 'expanded' => true));
      $this->widgetSchema['derivado_de'] = new sfWidgetFormChoice(array('choices' => self::$derivado, 'expanded' => true));
      $this->widgetSchema['cuidador_principal'] = new sfWidgetFormChoice(array('choices' => self::$cuidador, 'expanded' => true));
      $this->widgetSchema['sexo'] = new sfWidgetFormChoice(array('choices' => self::$sexo, 'expanded' => true));
      $this->widgetSchema['per_apariencia_gral_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['per_habitos_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['per_alergias_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['per_inmunizaciones_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['per_medicacion_actual_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      
      $this->widgetSchema['nutmet_higiene_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['nutmet_estado_nutricional_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['nutmet_protesis_dental_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['nutmet_liquidos_electrolitos_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      
      $this->widgetSchema['patelim_habito_intestinal_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['patelim_habito_urinario_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      
      $this->widgetSchema['acteje_valoracion_cardiopulmonar_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['acteje_capacidad_motora_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['acteje_act_diversion_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['acteje_deficit_autocuidado_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['acteje_crecim_desarrollo_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      
      $this->widgetSchema['des_habito_descanso_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['des_transtorno_sueno_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      
      $this->widgetSchema['cogper_alter_sensoriales_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['cogper_nivel_conciencia_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      $this->widgetSchema['cogper_alteracion_promentales_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      
      $this->widgetSchema['auto_reaccion_emocional_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      
      $this->widgetSchema['relrol_relacion_interpersonal_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['relrol_conducta_familia_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['relrol_cambio_personalfamiliar_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      
      $this->widgetSchema['repsex_alteracion_sisreproductivo_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo2(),'expanded' => true));
      
      $this->widgetSchema['capstr_relpaciente_enfermedad_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      $this->widgetSchema['capstr_relfamilia_enfermedad_esc'] = new sfWidgetFormChoice(array('choices'  => AtencionEnfermeriaTable::getDescripciones_escala_tipo1(),'expanded' => true));
      
      //
  }
  
  public function disableAllWidgets()
  {
      foreach ($this->widgetSchema->getFields() as $v){          
          $v->setAttribute('readonly', 'readonly');
          $v->setAttribute('onclick', 'return false;');
      }
  }
  
}
