<?php

/**
 * DetalleListaDieta form base class.
 *
 * @method DetalleListaDieta getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleListaDietaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'lista_dieta_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ListaDieta'), 'add_empty' => true)),
      'internado_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => true)),
      'dieta'          => new sfWidgetFormInputText(),
      'diagnostico'    => new sfWidgetFormInputText(),
      'created_at'     => new myWidgetFormDojoDateTime(),
      'updated_at'     => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'lista_dieta_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ListaDieta'), 'required' => false)),
      'internado_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'required' => false)),
      'dieta'          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'diagnostico'    => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'created_at'     => new myValidatorDojoDateTime(),
      'updated_at'     => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_lista_dieta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleListaDieta';
  }

}
