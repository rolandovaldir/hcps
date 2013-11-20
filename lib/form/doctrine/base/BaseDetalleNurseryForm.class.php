<?php

/**
 * DetalleNursery form base class.
 *
 * @method DetalleNursery getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleNurseryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'signos_vitales_nursery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SignosVitalesNursery'), 'add_empty' => false)),
      'fecha'                     => new sfWidgetFormDate(),
      'hora'                      => new sfWidgetFormTime(),
      'fc_nursery'                => new sfWidgetFormInputText(),
      'fr_nursery'                => new sfWidgetFormInputText(),
      'to_nursery'                => new sfWidgetFormInputText(),
      'diu_nursery'               => new sfWidgetFormInputText(),
      'cat_nursery'               => new sfWidgetFormInputText(),
      'lm_nursery'                => new sfWidgetFormInputText(),
      'residuo'                   => new sfWidgetFormInputText(),
      'observaciones'             => new sfWidgetFormInputText(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'signos_vitales_nursery_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SignosVitalesNursery'))),
      'fecha'                     => new sfValidatorDate(array('required' => false)),
      'hora'                      => new sfValidatorTime(array('required' => false)),
      'fc_nursery'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fr_nursery'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'to_nursery'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'diu_nursery'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cat_nursery'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'lm_nursery'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'residuo'                   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'observaciones'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('detalle_nursery[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleNursery';
  }

}
