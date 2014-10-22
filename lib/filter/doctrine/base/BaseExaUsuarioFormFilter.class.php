<?php

/**
 * ExaUsuario filter form base class.
 *
 * @package    info_examen
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExaUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'exa_nombre_usuario'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'exa_login'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'exa_pass_usuario'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'exa_permiso_usuario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'exa_nombre_usuario'  => new sfValidatorPass(array('required' => false)),
      'exa_login'           => new sfValidatorPass(array('required' => false)),
      'exa_pass_usuario'    => new sfValidatorPass(array('required' => false)),
      'exa_permiso_usuario' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('exa_usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaUsuario';
  }

  public function getFields()
  {
    return array(
      'exa_id_usuario'      => 'Number',
      'exa_nombre_usuario'  => 'Text',
      'exa_login'           => 'Text',
      'exa_pass_usuario'    => 'Text',
      'exa_permiso_usuario' => 'Number',
    );
  }
}
