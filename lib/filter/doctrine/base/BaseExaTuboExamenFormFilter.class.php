<?php

/**
 * ExaTuboExamen filter form base class.
 *
 * @package    info_examen
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExaTuboExamenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ett_id_tubo'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ExaTubo'), 'add_empty' => true)),
      'ett_id_examen' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ExaExamen'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'ett_id_tubo'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ExaTubo'), 'column' => 'ext_id_tubo')),
      'ett_id_examen' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ExaExamen'), 'column' => 'exa_id_examen')),
    ));

    $this->widgetSchema->setNameFormat('exa_tubo_examen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaTuboExamen';
  }

  public function getFields()
  {
    return array(
      'ett_id'        => 'Number',
      'ett_id_tubo'   => 'ForeignKey',
      'ett_id_examen' => 'ForeignKey',
    );
  }
}
