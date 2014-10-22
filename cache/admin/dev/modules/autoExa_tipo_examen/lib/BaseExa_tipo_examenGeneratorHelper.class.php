<?php

/**
 * exa_tipo_examen module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage exa_tipo_examen
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExa_tipo_examenGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'exa_tipo_examen' : 'exa_tipo_examen_'.$action;
  }
}
