<?php

/**
 * Apgar filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseApgarFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'examen_fisico_recien_nacido_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ExamenFisicoRecienNacido'), 'add_empty' => true)),
      'nacer_egresar'                  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'apariencia'                     => new sfWidgetFormFilterInput(),
      'piel'                           => new sfWidgetFormFilterInput(),
      'cabeza'                         => new sfWidgetFormFilterInput(),
      'ojos'                           => new sfWidgetFormFilterInput(),
      'oidos_nariz_garganta'           => new sfWidgetFormFilterInput(),
      'torax'                          => new sfWidgetFormFilterInput(),
      'pulmones'                       => new sfWidgetFormFilterInput(),
      'corazon'                        => new sfWidgetFormFilterInput(),
      'abdomen'                        => new sfWidgetFormFilterInput(),
      'genitales'                      => new sfWidgetFormFilterInput(),
      'torso_espina'                   => new sfWidgetFormFilterInput(),
      'extremidades'                   => new sfWidgetFormFilterInput(),
      'reflejos'                       => new sfWidgetFormFilterInput(),
      'ano'                            => new sfWidgetFormFilterInput(),
      'created_at'                     => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
      'updated_at'                     => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'examen_fisico_recien_nacido_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ExamenFisicoRecienNacido'), 'column' => 'id')),
      'nacer_egresar'                  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'apariencia'                     => new sfValidatorPass(array('required' => false)),
      'piel'                           => new sfValidatorPass(array('required' => false)),
      'cabeza'                         => new sfValidatorPass(array('required' => false)),
      'ojos'                           => new sfValidatorPass(array('required' => false)),
      'oidos_nariz_garganta'           => new sfValidatorPass(array('required' => false)),
      'torax'                          => new sfValidatorPass(array('required' => false)),
      'pulmones'                       => new sfValidatorPass(array('required' => false)),
      'corazon'                        => new sfValidatorPass(array('required' => false)),
      'abdomen'                        => new sfValidatorPass(array('required' => false)),
      'genitales'                      => new sfValidatorPass(array('required' => false)),
      'torso_espina'                   => new sfValidatorPass(array('required' => false)),
      'extremidades'                   => new sfValidatorPass(array('required' => false)),
      'reflejos'                       => new sfValidatorPass(array('required' => false)),
      'ano'                            => new sfValidatorPass(array('required' => false)),
      'created_at'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('apgar_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Apgar';
  }

  public function getFields()
  {
    return array(
      'id'                             => 'Number',
      'examen_fisico_recien_nacido_id' => 'ForeignKey',
      'nacer_egresar'                  => 'Boolean',
      'apariencia'                     => 'Text',
      'piel'                           => 'Text',
      'cabeza'                         => 'Text',
      'ojos'                           => 'Text',
      'oidos_nariz_garganta'           => 'Text',
      'torax'                          => 'Text',
      'pulmones'                       => 'Text',
      'corazon'                        => 'Text',
      'abdomen'                        => 'Text',
      'genitales'                      => 'Text',
      'torso_espina'                   => 'Text',
      'extremidades'                   => 'Text',
      'reflejos'                       => 'Text',
      'ano'                            => 'Text',
      'created_at'                     => 'Date',
      'updated_at'                     => 'Date',
    );
  }
}
