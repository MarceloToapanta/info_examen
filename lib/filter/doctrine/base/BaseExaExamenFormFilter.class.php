<?php

/**
 * ExaExamen filter form base class.
 *
 * @package    info_examen
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExaExamenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'exa_id_tipo_examen' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ExaTipoExamen'), 'add_empty' => true)),
      'exa_nombre_examen'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'exa_descrip_examen' => new sfWidgetFormFilterInput(),
      'exa_observacion'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'exa_id_tipo_examen' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ExaTipoExamen'), 'column' => 'ete_id_tipo_examen')),
      'exa_nombre_examen'  => new sfValidatorPass(array('required' => false)),
      'exa_descrip_examen' => new sfValidatorPass(array('required' => false)),
      'exa_observacion'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('exa_examen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExaExamen';
  }

  public function getFields()
  {
    return array(
      'exa_id_examen'      => 'Number',
      'exa_id_tipo_examen' => 'ForeignKey',
      'exa_nombre_examen'  => 'Text',
      'exa_descrip_examen' => 'Text',
      'exa_observacion'    => 'Text',
    );
  }
}
