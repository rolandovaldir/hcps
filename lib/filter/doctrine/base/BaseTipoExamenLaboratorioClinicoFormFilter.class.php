<?php

/**
 * TipoExamenLaboratorioClinico filter form base class.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTipoExamenLaboratorioClinicoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'grupo_orden'                               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grupo_nombre'                              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'examen_orden'                              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'examen_nombre'                             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'activo'                                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'solicitud_examen_laboratorio_clinico_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'SolicitudExamenLaboratorioClinico')),
    ));

    $this->setValidators(array(
      'grupo_orden'                               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grupo_nombre'                              => new sfValidatorPass(array('required' => false)),
      'examen_orden'                              => new sfValidatorPass(array('required' => false)),
      'examen_nombre'                             => new sfValidatorPass(array('required' => false)),
      'activo'                                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'solicitud_examen_laboratorio_clinico_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'SolicitudExamenLaboratorioClinico', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_examen_laboratorio_clinico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addSolicitudExamenLaboratorioClinicoListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('DetalleSolicitudExamenLaboratorioClinico.solicitud_examen_laboratorio_clinico_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'TipoExamenLaboratorioClinico';
  }

  public function getFields()
  {
    return array(
      'id'                                        => 'Number',
      'grupo_orden'                               => 'Number',
      'grupo_nombre'                              => 'Text',
      'examen_orden'                              => 'Text',
      'examen_nombre'                             => 'Text',
      'activo'                                    => 'Boolean',
      'solicitud_examen_laboratorio_clinico_list' => 'ManyKey',
    );
  }
}
