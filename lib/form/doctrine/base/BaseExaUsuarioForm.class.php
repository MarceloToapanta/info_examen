<?php

/**
 * ExaUsuario form base class.
 *
 * @method ExaUsuario getObject() Returns the current form's model object
 *
 * @package    info_examen
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExaUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'exa_id_usuario'      => new sfWidgetFormInputHidden(),
      'exa_nombre_usuario'  => new sfWidgetFormInputText(),
      'exa_login'           => new sfWidgetFormInputText(),
      'exa_pass_usuario'    => new sfWidgetFormInputText(),
      'exa_permiso_usuario' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'exa_id_usuario'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('exa_id_usuario')), 'empty_value' => $this->getObject()->get('exa_id_usuario'), 'required' => false)),
      'exa_nombre_usuario'  => new sfValidatorString(array('max_length' => 80)),
      'exa_login'           => new sfValidatorString(array('max_length' => 20)),
      'exa_pass_usuario'    => new sfValidatorString(array('max_length' => 20)),
      'exa_permiso_usuario' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('exa_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaUsuario';
  }

}
