<?php

/**
 * Internado filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseInternadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'afiliado_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Afiliado'), 'add_empty' => true)),
      'noAfiliado_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PacienteOtroseguro'), 'add_empty' => true)),
      'categoria_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cama_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cama'), 'add_empty' => true)),
      'medico_id'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'medico_consulta_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'medico_referencia_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'formulario_referencia'   => new sfWidgetFormFilterInput(),
      'diagnostico'             => new sfWidgetFormFilterInput(),
      'procedencia'             => new sfWidgetFormFilterInput(),
      'medio_referencia'        => new sfWidgetFormFilterInput(),
      'observaciones'           => new sfWidgetFormFilterInput(),
      'fecha'                   => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>')),
      'hora'                    => new sfWidgetFormFilterInput(),
      'conducto'                => new sfWidgetFormFilterInput(),
      'es_afiliado'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'alta'                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'altaFecha'               => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'altaHora'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diagnostico_alta'        => new sfWidgetFormFilterInput(),
      'tratamientio'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lugar_referencia_salida' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'medio_referencia_salida' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'motivo_refe_retorno'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'afiliado_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Afiliado'), 'column' => 'id')),
      'noAfiliado_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PacienteOtroseguro'), 'column' => 'id')),
      'categoria_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cama_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cama'), 'column' => 'id')),
      'medico_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medico_consulta_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medico_referencia_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'formulario_referencia'   => new sfValidatorPass(array('required' => false)),
      'diagnostico'             => new sfValidatorPass(array('required' => false)),
      'procedencia'             => new sfValidatorPass(array('required' => false)),
      'medio_referencia'        => new sfValidatorPass(array('required' => false)),
      'observaciones'           => new sfValidatorPass(array('required' => false)),
      'fecha'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora'                    => new sfValidatorPass(array('required' => false)),
      'conducto'                => new sfValidatorPass(array('required' => false)),
      'es_afiliado'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'alta'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'altaFecha'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'altaHora'                => new sfValidatorPass(array('required' => false)),
      'diagnostico_alta'        => new sfValidatorPass(array('required' => false)),
      'tratamientio'            => new sfValidatorPass(array('required' => false)),
      'lugar_referencia_salida' => new sfValidatorPass(array('required' => false)),
      'medio_referencia_salida' => new sfValidatorPass(array('required' => false)),
      'motivo_refe_retorno'     => new sfValidatorPass(array('required' => false)),
      'created_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('internado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Internado';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'afiliado_id'             => 'ForeignKey',
      'noAfiliado_id'           => 'ForeignKey',
      'categoria_id'            => 'Number',
      'cama_id'                 => 'ForeignKey',
      'medico_id'               => 'Number',
      'medico_consulta_id'      => 'Number',
      'medico_referencia_id'    => 'Number',
      'formulario_referencia'   => 'Text',
      'diagnostico'             => 'Text',
      'procedencia'             => 'Text',
      'medio_referencia'        => 'Text',
      'observaciones'           => 'Text',
      'fecha'                   => 'Date',
      'hora'                    => 'Text',
      'conducto'                => 'Text',
      'es_afiliado'             => 'Boolean',
      'alta'                    => 'Boolean',
      'altaFecha'               => 'Date',
      'altaHora'                => 'Text',
      'diagnostico_alta'        => 'Text',
      'tratamientio'            => 'Text',
      'lugar_referencia_salida' => 'Text',
      'medio_referencia_salida' => 'Text',
      'motivo_refe_retorno'     => 'Text',
      'created_at'              => 'Date',
      'updated_at'              => 'Date',
    );
  }
}
