<?php

/**
 * Cama filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCamaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pieza_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pieza'), 'add_empty' => true)),
      'codigo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ocupada'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'observaciones' => new sfWidgetFormFilterInput(),
      'codigo_activo' => new sfWidgetFormFilterInput(),
      'activo_id'     => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'pieza_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pieza'), 'column' => 'id')),
      'codigo'        => new sfValidatorPass(array('required' => false)),
      'ocupada'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'observaciones' => new sfValidatorPass(array('required' => false)),
      'codigo_activo' => new sfValidatorPass(array('required' => false)),
      'activo_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('cama_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cama';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'pieza_id'      => 'ForeignKey',
      'codigo'        => 'Text',
      'ocupada'       => 'Boolean',
      'observaciones' => 'Text',
      'codigo_activo' => 'Text',
      'activo_id'     => 'Number',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
