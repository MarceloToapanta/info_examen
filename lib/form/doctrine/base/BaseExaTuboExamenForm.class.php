<?php

/**
 * ExaTuboExamen form base class.
 *
 * @method ExaTuboExamen getObject() Returns the current form's model object
 *
 * @package    info_examen
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExaTuboExamenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ett_id'        => new sfWidgetFormInputHidden(),
      'ett_id_tubo'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ExaTubo'), 'add_empty' => false)),
      'ett_id_examen' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ExaExamen'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'ett_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ett_id')), 'empty_value' => $this->getObject()->get('ett_id'), 'required' => false)),
      'ett_id_tubo'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ExaTubo'))),
      'ett_id_examen' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ExaExamen'))),
    ));

    $this->widgetSchema->setNameFormat('exa_tubo_examen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaTuboExamen';
  }

}
