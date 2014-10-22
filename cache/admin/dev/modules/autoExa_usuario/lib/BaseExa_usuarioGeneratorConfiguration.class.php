<?php

/**
 * exa_usuario module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage exa_usuario
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExa_usuarioGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return array(  '_delete' =>   array(    'label' => 'Eliminar',  ),  '_list' =>   array(    'label' => 'Regresar Lista',  ),  '_save' =>   array(    'label' => 'Guardar',  ),);
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
    return '%%exa_nombre_usuario%% - %%exa_login%% - %%exa_pass_usuario%% - %%exa_permiso_usuario%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de Usuarios';
  }

  public function getEditTitle()
  {
    return 'Editar Usuario';
  }

  public function getNewTitle()
  {
    return 'Nuevo Usuario';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'exa_nombre_usuario',  1 => 'exa_permiso_usuario',);
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
    return array(  0 => 'exa_nombre_usuario',  1 => 'exa_login',  2 => 'exa_pass_usuario',  3 => 'exa_permiso_usuario',);
  }

  public function getFieldsDefault()
  {
    return array(
      'exa_id_usuario' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Id',),
      'exa_nombre_usuario' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre Usuario',),
      'exa_login' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Usuario',),
      'exa_pass_usuario' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Clave',),
      'exa_permiso_usuario' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Permiso',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'exa_id_usuario' => array(),
      'exa_nombre_usuario' => array(),
      'exa_login' => array(),
      'exa_pass_usuario' => array(),
      'exa_permiso_usuario' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'exa_id_usuario' => array(),
      'exa_nombre_usuario' => array(),
      'exa_login' => array(),
      'exa_pass_usuario' => array(),
      'exa_permiso_usuario' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'exa_id_usuario' => array(),
      'exa_nombre_usuario' => array(),
      'exa_login' => array(),
      'exa_pass_usuario' => array(),
      'exa_permiso_usuario' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'exa_id_usuario' => array(),
      'exa_nombre_usuario' => array(  'help' => 'Actualiza nombre de usuario',),
      'exa_login' => array(  'help' => 'Actualiza nombre para ingresar al sistema del usario',),
      'exa_pass_usuario' => array(  'help' => 'Actualiza la clave del usuario',),
      'exa_permiso_usuario' => array(  'help' => 'Actualiza el permiso del usuario',),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'exa_id_usuario' => array(),
      'exa_nombre_usuario' => array(  'help' => 'Ingresa nombre de usuario',),
      'exa_login' => array(  'help' => 'Ingresa nombre para ingresar al sistema del usario',),
      'exa_pass_usuario' => array(  'help' => 'Ingresa la clave del usuario',),
      'exa_permiso_usuario' => array(  'help' => 'Ingresa el permiso del usuario',),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ExaUsuarioForm';
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
    return 'ExaUsuarioFormFilter';
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
