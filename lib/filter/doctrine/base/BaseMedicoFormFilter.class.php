<?php

/**
 * Medico filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedicoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombrec'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cargahor'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hor_ini'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hor_fin'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'intervalo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'activo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cupos'           => new sfWidgetFormFilterInput(),
      'consultorio'     => new sfWidgetFormFilterInput(),
      'observacion'     => new sfWidgetFormFilterInput(),
      'especialidad_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Especialidad'), 'add_empty' => true)),
      'item_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo'          => new sfValidatorPass(array('required' => false)),
      'nombrec'         => new sfValidatorPass(array('required' => false)),
      'cargahor'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'hor_ini'         => new sfValidatorPass(array('required' => false)),
      'hor_fin'         => new sfValidatorPass(array('required' => false)),
      'intervalo'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'activo'          => new sfValidatorPass(array('required' => false)),
      'cupos'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'consultorio'     => new sfValidatorPass(array('required' => false)),
      'observacion'     => new sfValidatorPass(array('required' => false)),
      'especialidad_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Especialidad'), 'column' => 'id')),
      'item_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('medico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Medico';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'codigo'          => 'Text',
      'nombrec'         => 'Text',
      'cargahor'        => 'Number',
      'hor_ini'         => 'Text',
      'hor_fin'         => 'Text',
      'intervalo'       => 'Number',
      'activo'          => 'Text',
      'cupos'           => 'Number',
      'consultorio'     => 'Text',
      'observacion'     => 'Text',
      'especialidad_id' => 'ForeignKey',
      'item_id'         => 'Number',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
