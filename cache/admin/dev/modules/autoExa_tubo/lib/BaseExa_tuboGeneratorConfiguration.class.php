<?php

/**
 * exa_tubo module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage exa_tubo
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExa_tuboGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%ext_nombre_color%% - %%ext_codigo_color%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista Tubos E.';
  }

  public function getEditTitle()
  {
    return 'Editar Tubo E.';
  }

  public function getNewTitle()
  {
    return 'Nuevo Tubo E.';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'ext_nombre_color',  1 => 'ext_codigo_color',);
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
    return array(  0 => 'ext_nombre_color',  1 => 'ext_codigo_color',);
  }

  public function getFieldsDefault()
  {
    return array(
      'ext_id_tubo' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Id',),
      'ext_nombre_color' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre Color Tubo',),
      'ext_codigo_color' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Codigo Color Tubo',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'ext_id_tubo' => array(),
      'ext_nombre_color' => array(),
      'ext_codigo_color' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'ext_id_tubo' => array(),
      'ext_nombre_color' => array(),
      'ext_codigo_color' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'ext_id_tubo' => array(),
      'ext_nombre_color' => array(),
      'ext_codigo_color' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'ext_id_tubo' => array(),
      'ext_nombre_color' => array(  'help' => 'Actualiza Nombre Color',),
      'ext_codigo_color' => array(  'help' => 'Actualiza Codigo Codigo',),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'ext_id_tubo' => array(),
      'ext_nombre_color' => array(  'help' => 'Ingresar Nombre Color',),
      'ext_codigo_color' => array(  'help' => 'Ingresar Codigo Codigo',),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ExaTuboForm';
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
    return 'ExaTuboFormFilter';
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
