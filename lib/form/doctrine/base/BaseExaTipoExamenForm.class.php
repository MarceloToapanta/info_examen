<?php

/**
 * ExaTipoExamen form base class.
 *
 * @method ExaTipoExamen getObject() Returns the current form's model object
 *
 * @package    info_examen
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExaTipoExamenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ete_id_tipo_examen' => new sfWidgetFormInputHidden(),
      'ete_nombre_examen'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ete_id_tipo_examen' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ete_id_tipo_examen')), 'empty_value' => $this->getObject()->get('ete_id_tipo_examen'), 'required' => false)),
      'ete_nombre_examen'  => new sfValidatorString(array('max_length' => 80)),
    ));

    $this->widgetSchema->setNameFormat('exa_tipo_examen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaTipoExamen';
  }

}
