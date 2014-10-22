<?php

/**
 * ExaTipoExamen filter form base class.
 *
 * @package    info_examen
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExaTipoExamenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ete_nombre_examen'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ete_nombre_examen'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('exa_tipo_examen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaTipoExamen';
  }

  public function getFields()
  {
    return array(
      'ete_id_tipo_examen' => 'Number',
      'ete_nombre_examen'  => 'Text',
    );
  }
}
