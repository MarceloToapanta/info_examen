<?php

/**
 * ExaTubo filter form base class.
 *
 * @package    info_examen
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExaTuboFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ext_nombre_color' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ext_codigo_color' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ext_nombre_color' => new sfValidatorPass(array('required' => false)),
      'ext_codigo_color' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('exa_tubo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaTubo';
  }

  public function getFields()
  {
    return array(
      'ext_id_tubo'      => 'Number',
      'ext_nombre_color' => 'Text',
      'ext_codigo_color' => 'Text',
    );
  }
}
