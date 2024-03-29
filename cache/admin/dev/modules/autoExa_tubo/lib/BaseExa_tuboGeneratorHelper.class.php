<?php

/**
 * exa_tubo module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage exa_tubo
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExa_tuboGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'exa_tubo' : 'exa_tubo_'.$action;
  }
}
