<?php

/**
 * TipoExamenLaboratorioClinico form base class.
 *
 * @method TipoExamenLaboratorioClinico getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTipoExamenLaboratorioClinicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                        => new sfWidgetFormInputHidden(),
      'grupo_orden'                               => new sfWidgetFormInputText(),
      'grupo_nombre'                              => new sfWidgetFormInputText(),
      'examen_orden'                              => new sfWidgetFormInputText(),
      'examen_nombre'                             => new sfWidgetFormInputText(),
      'activo'                                    => new sfWidgetFormInputCheckbox(),
      'solicitud_examen_laboratorio_clinico_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'SolicitudExamenLaboratorioClinico')),
    ));

    $this->setValidators(array(
      'id'                                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'grupo_orden'                               => new sfValidatorInteger(),
      'grupo_nombre'                              => new sfValidatorString(array('max_length' => 50)),
      'examen_orden'                              => new sfValidatorString(array('max_length' => 5)),
      'examen_nombre'                             => new sfValidatorString(array('max_length' => 150)),
      'activo'                                    => new sfValidatorBoolean(),
      'solicitud_examen_laboratorio_clinico_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'SolicitudExamenLaboratorioClinico', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_examen_laboratorio_clinico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoExamenLaboratorioClinico';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['solicitud_examen_laboratorio_clinico_list']))
    {
      $this->setDefault('solicitud_examen_laboratorio_clinico_list', $this->object->SolicitudExamenLaboratorioClinico->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveSolicitudExamenLaboratorioClinicoList($con);

    parent::doSave($con);
  }

  public function saveSolicitudExamenLaboratorioClinicoList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['solicitud_examen_laboratorio_clinico_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->SolicitudExamenLaboratorioClinico->getPrimaryKeys();
    $values = $this->getValue('solicitud_examen_laboratorio_clinico_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('SolicitudExamenLaboratorioClinico', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('SolicitudExamenLaboratorioClinico', array_values($link));
    }
  }

}
