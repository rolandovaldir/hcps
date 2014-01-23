<?php

/**
 * SolicitudExamenLaboratorioClinico filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSolicitudExamenLaboratorioClinicoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internado_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'vobo_medico_id'                       => new sfWidgetFormFilterInput(),
      'examenes'                             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'material_enviado'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'otros_examenes'                       => new sfWidgetFormFilterInput(),
      'diagnostico_presuntivo'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'medico_id'                            => new sfWidgetFormFilterInput(),
      'lugar'                                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'                                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'                           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'tipo_examen_laboratorio_clinico_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'TipoExamenLaboratorioClinico')),
    ));

    $this->setValidators(array(
      'internado_id'                         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Internado'), 'column' => 'id')),
      'vobo_medico_id'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'examenes'                             => new sfValidatorPass(array('required' => false)),
      'material_enviado'                     => new sfValidatorPass(array('required' => false)),
      'otros_examenes'                       => new sfValidatorPass(array('required' => false)),
      'diagnostico_presuntivo'               => new sfValidatorPass(array('required' => false)),
      'medico_id'                            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lugar'                                => new sfValidatorPass(array('required' => false)),
      'fecha'                                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'                           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'                           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
      'tipo_examen_laboratorio_clinico_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'TipoExamenLaboratorioClinico', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('solicitud_examen_laboratorio_clinico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addTipoExamenLaboratorioClinicoListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.DetalleSolicitudExamenLaboratorioClinico DetalleSolicitudExamenLaboratorioClinico')
      ->andWhereIn('DetalleSolicitudExamenLaboratorioClinico.tipo_examen_laboratorio_clinico_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'SolicitudExamenLaboratorioClinico';
  }

  public function getFields()
  {
    return array(
      'id'                                   => 'Number',
      'internado_id'                         => 'ForeignKey',
      'vobo_medico_id'                       => 'Number',
      'examenes'                             => 'Text',
      'material_enviado'                     => 'Text',
      'otros_examenes'                       => 'Text',
      'diagnostico_presuntivo'               => 'Text',
      'medico_id'                            => 'Number',
      'lugar'                                => 'Text',
      'fecha'                                => 'Date',
      'created_at'                           => 'Date',
      'updated_at'                           => 'Date',
      'created_by'                           => 'ForeignKey',
      'updated_by'                           => 'ForeignKey',
      'tipo_examen_laboratorio_clinico_list' => 'ManyKey',
    );
  }
}
