<?php

/**
 * SolicitudExamenLaboratorioClinico form base class.
 *
 * @method SolicitudExamenLaboratorioClinico getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSolicitudExamenLaboratorioClinicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                   => new sfWidgetFormInputHidden(),
      'internado_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'vobo_medico_id'                       => new myWidgetFormDojoInteger(),
      'examenes'                             => new sfWidgetFormInputText(),
      'material_enviado'                     => new sfWidgetFormInputText(),
      'otros_examenes'                       => new sfWidgetFormInputText(),
      'diagnostico_presuntivo'               => new sfWidgetFormInputText(),
      'medico_id'                            => new myWidgetFormDojoInteger(),
      'lugar'                                => new sfWidgetFormInputText(),
      'fecha'                                => new myWidgetFormDojoDate(),
      'created_at'                           => new myWidgetFormDojoDateTime(),
      'updated_at'                           => new myWidgetFormDojoDateTime(),
      'created_by'                           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'tipo_examen_laboratorio_clinico_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'TipoExamenLaboratorioClinico')),
    ));

    $this->setValidators(array(
      'id'                                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'                         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'vobo_medico_id'                       => new sfValidatorInteger(array('required' => false)),
      'examenes'                             => new sfValidatorPass(),
      'material_enviado'                     => new sfValidatorString(array('max_length' => 45)),
      'otros_examenes'                       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'diagnostico_presuntivo'               => new sfValidatorString(array('max_length' => 45)),
      'medico_id'                            => new sfValidatorInteger(array('required' => false)),
      'lugar'                                => new sfValidatorString(array('max_length' => 45)),
      'fecha'                                => new myValidatorDojoDate(),
      'created_at'                           => new myValidatorDojoDateTime(),
      'updated_at'                           => new myValidatorDojoDateTime(),
      'created_by'                           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'                           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
      'tipo_examen_laboratorio_clinico_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'TipoExamenLaboratorioClinico', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('solicitud_examen_laboratorio_clinico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SolicitudExamenLaboratorioClinico';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['tipo_examen_laboratorio_clinico_list']))
    {
      $this->setDefault('tipo_examen_laboratorio_clinico_list', $this->object->TipoExamenLaboratorioClinico->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveTipoExamenLaboratorioClinicoList($con);

    parent::doSave($con);
  }

  public function saveTipoExamenLaboratorioClinicoList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['tipo_examen_laboratorio_clinico_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->TipoExamenLaboratorioClinico->getPrimaryKeys();
    $values = $this->getValue('tipo_examen_laboratorio_clinico_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('TipoExamenLaboratorioClinico', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('TipoExamenLaboratorioClinico', array_values($link));
    }
  }

}
