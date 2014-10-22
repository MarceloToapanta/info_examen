<?php

/**
 * exa_usuario module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage exa_usuario
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExa_usuarioGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'exa_usuario' : 'exa_usuario_'.$action;
  }
}
