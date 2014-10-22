<?php

/**
 * ExaTubo form base class.
 *
 * @method ExaTubo getObject() Returns the current form's model object
 *
 * @package    info_examen
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExaTuboForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ext_id_tubo'      => new sfWidgetFormInputHidden(),
      'ext_nombre_color' => new sfWidgetFormInputText(),
      'ext_codigo_color' => new sfWidgetFormInputText(array(), array("class"=>'iColorPicker')),
    ));

    $this->setValidators(array(
      'ext_id_tubo'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ext_id_tubo')), 'empty_value' => $this->getObject()->get('ext_id_tubo'), 'required' => false)),
      'ext_nombre_color' => new sfValidatorString(array('max_length' => 50)),
      'ext_codigo_color' => new sfValidatorString(array('max_length' => 10)),
    ));

    $this->widgetSchema->setNameFormat('exa_tubo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaTubo';
  }

}
