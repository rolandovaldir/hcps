<?php

/**
 * SolicitudTransfusionSanguinea filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSolicitudTransfusionSanguineaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'quirofano'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'requiere_transfusion_de'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cumplirse_enforma'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_prog_quirurgica'     => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'hora_prog_quirurgica'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'quirofano_prog_quirurgica' => new sfWidgetFormFilterInput(),
      'cantidad_requerida'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad_requerida_unidad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observaciones'             => new sfWidgetFormFilterInput(),
      'fecha_solicitud'           => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'hora_solicitud'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'medico_id'                 => new sfWidgetFormFilterInput(),
      'numero'                    => new sfWidgetFormFilterInput(),
      'fecha_recepcion_solicitud' => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>')),
      'bolsa_compatible1'         => new sfWidgetFormFilterInput(),
      'bolsa_compatible2'         => new sfWidgetFormFilterInput(),
      'bolsa_compatible3'         => new sfWidgetFormFilterInput(),
      'bolsa_compatible4'         => new sfWidgetFormFilterInput(),
      'bolsa_compatible5'         => new sfWidgetFormFilterInput(),
      'grupo_sanguineo_receptor'  => new sfWidgetFormFilterInput(),
      'hr_receptor'               => new sfWidgetFormFilterInput(),
      'anticuerpos_irreg'         => new sfWidgetFormFilterInput(),
      'nombre_res_bancosangre'    => new sfWidgetFormFilterInput(),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'internado_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'quirofano'                 => new sfValidatorPass(array('required' => false)),
      'requiere_transfusion_de'   => new sfValidatorPass(array('required' => false)),
      'cumplirse_enforma'         => new sfValidatorPass(array('required' => false)),
      'fecha_prog_quirurgica'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora_prog_quirurgica'      => new sfValidatorPass(array('required' => false)),
      'quirofano_prog_quirurgica' => new sfValidatorPass(array('required' => false)),
      'cantidad_requerida'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cantidad_requerida_unidad' => new sfValidatorPass(array('required' => false)),
      'observaciones'             => new sfValidatorPass(array('required' => false)),
      'fecha_solicitud'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora_solicitud'            => new sfValidatorPass(array('required' => false)),
      'medico_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'numero'                    => new sfValidatorPass(array('required' => false)),
      'fecha_recepcion_solicitud' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'bolsa_compatible1'         => new sfValidatorPass(array('required' => false)),
      'bolsa_compatible2'         => new sfValidatorPass(array('required' => false)),
      'bolsa_compatible3'         => new sfValidatorPass(array('required' => false)),
      'bolsa_compatible4'         => new sfValidatorPass(array('required' => false)),
      'bolsa_compatible5'         => new sfValidatorPass(array('required' => false)),
      'grupo_sanguineo_receptor'  => new sfValidatorPass(array('required' => false)),
      'hr_receptor'               => new sfValidatorPass(array('required' => false)),
      'anticuerpos_irreg'         => new sfValidatorPass(array('required' => false)),
      'nombre_res_bancosangre'    => new sfValidatorPass(array('required' => false)),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('solicitud_transfusion_sanguinea_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SolicitudTransfusionSanguinea';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'internado_id'              => 'ForeignKey',
      'quirofano'                 => 'Text',
      'requiere_transfusion_de'   => 'Text',
      'cumplirse_enforma'         => 'Text',
      'fecha_prog_quirurgica'     => 'Date',
      'hora_prog_quirurgica'      => 'Text',
      'quirofano_prog_quirurgica' => 'Text',
      'cantidad_requerida'        => 'Number',
      'cantidad_requerida_unidad' => 'Text',
      'observaciones'             => 'Text',
      'fecha_solicitud'           => 'Date',
      'hora_solicitud'            => 'Text',
      'medico_id'                 => 'Number',
      'numero'                    => 'Text',
      'fecha_recepcion_solicitud' => 'Date',
      'bolsa_compatible1'         => 'Text',
      'bolsa_compatible2'         => 'Text',
      'bolsa_compatible3'         => 'Text',
      'bolsa_compatible4'         => 'Text',
      'bolsa_compatible5'         => 'Text',
      'grupo_sanguineo_receptor'  => 'Text',
      'hr_receptor'               => 'Text',
      'anticuerpos_irreg'         => 'Text',
      'nombre_res_bancosangre'    => 'Text',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}
