<?php

/**
 * panel actions.
 *
 * @package    info_examen
 * @subpackage panel
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class panelActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->nombre = $this->getUser()->getAttribute('nombre', 'Anónimo');
  }
  public function executeLogout(sfWebRequest $request){
    $this->getUser()->setAuthenticated(false);
    $this->getUser()->getAttributeHolder()->clear();
    $this->redirect("http://www.infoexamen.com/");
  }
}
