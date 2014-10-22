<?php

/**
 * exa_examen module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage exa_examen
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExa_examenGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%nombre_tipo_examen%% - %%exa_nombre_examen%% - %%exa_descrip_examen%% - %%exa_observacion%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de Examenes';
  }

  public function getEditTitle()
  {
    return 'Editar Examen';
  }

  public function getNewTitle()
  {
    return 'Nuevo Examen';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'exa_nombre_examen',);
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
    return array(  0 => 'nombre_tipo_examen',  1 => 'exa_nombre_examen',  2 => 'exa_descrip_examen',  3 => 'exa_observacion',);
  }

  public function getFieldsDefault()
  {
    return array(
      'exa_id_examen' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Id',),
      'exa_id_tipo_examen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Tipo de Examen',),
      'exa_nombre_examen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre de Examen',),
      'exa_descrip_examen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Descripción',),
      'exa_observacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Observaciones',),
      'nombre_tipo_examen' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Tipo de Examen',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'exa_id_examen' => array(),
      'exa_id_tipo_examen' => array(),
      'exa_nombre_examen' => array(),
      'exa_descrip_examen' => array(),
      'exa_observacion' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'exa_id_examen' => array(),
      'exa_id_tipo_examen' => array(),
      'exa_nombre_examen' => array(),
      'exa_descrip_examen' => array(),
      'exa_observacion' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'exa_id_examen' => array(),
      'exa_id_tipo_examen' => array(),
      'exa_nombre_examen' => array(),
      'exa_descrip_examen' => array(),
      'exa_observacion' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'exa_id_examen' => array(  'help' => 'Actualiza el Tipo de Examen',),
      'exa_id_tipo_examen' => array(  'help' => 'Actualiza el Tipo de Examen',),
      'exa_nombre_examen' => array(  'help' => 'Actualiza nombre de Examen',),
      'exa_descrip_examen' => array(  'help' => 'Actualiza la Descripcion de Examen',),
      'exa_observacion' => array(  'help' => 'Actualiza las Observaciones del Examen',),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'exa_id_examen' => array(  'help' => 'Ingresar',),
      'exa_id_tipo_examen' => array(  'help' => 'Ingresar Tipo de Examen',),
      'exa_nombre_examen' => array(  'help' => 'Ingresar Nombre de Examen',),
      'exa_descrip_examen' => array(  'help' => 'Ingresar la Descripcion de Examen',),
      'exa_observacion' => array(  'help' => 'Ingresar las Observaciones',),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ExaExamenForm';
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
    return 'ExaExamenFormFilter';
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
