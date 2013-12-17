<?php

/**
 * Afiliado filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAfiliadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'matricula'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paterno'    => new sfWidgetFormFilterInput(),
      'materno'    => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hclinica'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'empresa'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tafiliado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'activo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grupofam'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'matricula'  => new sfValidatorPass(array('required' => false)),
      'paterno'    => new sfValidatorPass(array('required' => false)),
      'materno'    => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'hclinica'   => new sfValidatorPass(array('required' => false)),
      'empresa'    => new sfValidatorPass(array('required' => false)),
      'tafiliado'  => new sfValidatorPass(array('required' => false)),
      'activo'     => new sfValidatorPass(array('required' => false)),
      'grupofam'   => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('afiliado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Afiliado';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'matricula'  => 'Text',
      'paterno'    => 'Text',
      'materno'    => 'Text',
      'nombre'     => 'Text',
      'hclinica'   => 'Text',
      'empresa'    => 'Text',
      'tafiliado'  => 'Text',
      'activo'     => 'Text',
      'grupofam'   => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
