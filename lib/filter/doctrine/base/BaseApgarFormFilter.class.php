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
      'apariencia'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'piel'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cabeza'                         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ojos'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'oidos_nariz_garganta'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'torax'                          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pulmones'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'corazon'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abdomen'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genitales'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'torso_espina'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'extremidades'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reflejos'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ano'                            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                     => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'updated_at'                     => new sfWidgetFormFilterDate(array('from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate(), 'filter_template' => '%date_range% %empty_checkbox% %empty_label%', 'template' => '<table class="onlyFormat"><tr><td>from</td><td>%from_date%</td><tr/><tr><td>to</td><td>%to_date%</td></tr></table>', 'with_empty' => false)),
      'created_by'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'motivo_anulacion'               => new sfWidgetFormFilterInput(),
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
      'created_by'                     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'                     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
      'motivo_anulacion'               => new sfValidatorPass(array('required' => false)),
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
      'created_by'                     => 'ForeignKey',
      'updated_by'                     => 'ForeignKey',
      'motivo_anulacion'               => 'Text',
    );
  }
}
