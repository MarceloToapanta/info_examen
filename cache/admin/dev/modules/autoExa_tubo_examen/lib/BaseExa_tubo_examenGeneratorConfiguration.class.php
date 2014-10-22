<?php

/**
 * exa_tubo_examen module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage exa_tubo_examen
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExa_tubo_examenGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array(  '_delete' =>   array(    'label' => 'Eliminar',  ),  '_list' =>   array(    'label' => 'Regresar Lista',  ),  '_save' =>   array(    'label' => 'Guardar',  ),  '_save_and_add' =>   array(    'label' => 'Guardar y Añadir',  ),);
  }

  public function getEditActions()
  {
    return array(  '_delete' =>   array(    'label' => 'Eliminar',    'confirm' => 'Esta Seguro(a)?',  ),  '_list' =>   array(    'label' => 'Regresar Lista',  ),  '_save' =>   array(    'label' => 'Guardar',  ),);
  }

  public function getListObjectActions()
  {
    return array(  '_edit' =>   array(    'label' => 'Editar',  ),  '_delete' =>   array(    'label' => 'Eliminar',    'confirm' => 'Esta Seguro(a)?',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' =>   array(    'label' => 'Nuevo',  ),);
  }

  public function getListBatchActions()
  {
    return array();
  }

  public function getListParams()
  {
    return '%%nombre_examen%% - %%nombre_tubo%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de Tubos Asigandos a Examenes';
  }

  public function getEditTitle()
  {
    return 'Editar asignacion';
  }

  public function getNewTitle()
  {
    return 'Nueva Asignacion';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'ett_id_tubo',  1 => 'ett_id_examen',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'nombre_examen',  1 => 'nombre_tubo',);
  }

  public function getFieldsDefault()
  {
    return array(
      'ett_id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ett_id_tubo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Nombre Color Tubo',),
      'ett_id_examen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Nombre Examen',),
      'nombre_examen' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre Examen',),
      'nombre_tubo' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre Color Tubo',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'ett_id' => array(),
      'ett_id_tubo' => array(),
      'ett_id_examen' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'ett_id' => array(),
      'ett_id_tubo' => array(),
      'ett_id_examen' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'ett_id' => array(),
      'ett_id_tubo' => array(),
      'ett_id_examen' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'ett_id' => array(),
      'ett_id_tubo' => array(  'help' => 'Actualiza Tubo',),
      'ett_id_examen' => array(  'help' => 'Actualiza Examen',),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'ett_id' => array(),
      'ett_id_tubo' => array(  'help' => 'Seleciona Tubo',),
      'ett_id_examen' => array(  'help' => 'Seleciona Examen',),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ExaTuboExamenForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ExaTuboExamenFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 10;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
