<?php

/**
 * exa_tipo_examen module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage exa_tipo_examen
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExa_tipo_examenGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%ete_nombre_examen%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista Tipos de Examenes';
  }

  public function getEditTitle()
  {
    return 'Editar Tipo de Examen';
  }

  public function getNewTitle()
  {
    return 'Nuevo Tipo de Examen';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'ete_nombre_examen',);
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
    return array(  0 => 'ete_nombre_examen',);
  }

  public function getFieldsDefault()
  {
    return array(
      'ete_id_tipo_examen' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Id',),
      'ete_nombre_examen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre Tipo de Examen',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'ete_id_tipo_examen' => array(),
      'ete_nombre_examen' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'ete_id_tipo_examen' => array(),
      'ete_nombre_examen' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'ete_id_tipo_examen' => array(),
      'ete_nombre_examen' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'ete_id_tipo_examen' => array(  'help' => 'Ingresar las Observaciones',),
      'ete_nombre_examen' => array(  'help' => 'Actualiza en Nombre de Tipo de Examen',),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'ete_id_tipo_examen' => array(  'help' => 'Ingresar las Observaciones',),
      'ete_nombre_examen' => array(  'help' => 'Ingresar en Nombre de Tipo de Examen',),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ExaTipoExamenForm';
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
    return 'ExaTipoExamenFormFilter';
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
