<?php

/**
 * ExaExamen form base class.
 *
 * @method ExaExamen getObject() Returns the current form's model object
 *
 * @package    info_examen
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExaExamenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'exa_id_examen'      => new sfWidgetFormInputHidden(),
      'exa_id_tipo_examen' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ExaTipoExamen'), 'add_empty' => false)),
      'exa_nombre_examen'  => new sfWidgetFormInputText(),
      'exa_descrip_examen' => new sfWidgetFormInputText(),
      'exa_observacion'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'exa_id_examen'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('exa_id_examen')), 'empty_value' => $this->getObject()->get('exa_id_examen'), 'required' => false)),
      'exa_id_tipo_examen' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ExaTipoExamen'))),
      'exa_nombre_examen'  => new sfValidatorString(array('max_length' => 80)),
      'exa_descrip_examen' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'exa_observacion'    => new sfValidatorString(array('max_length' => 250, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('exa_examen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaExamen';
  }

}
