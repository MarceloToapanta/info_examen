<?php

/**
 * exausuario actions.
 *
 * @package    info_examen
 * @subpackage exausuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class exausuarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->exa_usuarios = Doctrine_Core::getTable('ExaUsuario')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ExaUsuarioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ExaUsuarioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($exa_usuario = Doctrine_Core::getTable('ExaUsuario')->find(array($request->getParameter('exa_id_usuario'))), sprintf('Object exa_usuario does not exist (%s).', $request->getParameter('exa_id_usuario')));
    $this->form = new ExaUsuarioForm($exa_usuario);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($exa_usuario = Doctrine_Core::getTable('ExaUsuario')->find(array($request->getParameter('exa_id_usuario'))), sprintf('Object exa_usuario does not exist (%s).', $request->getParameter('exa_id_usuario')));
    $this->form = new ExaUsuarioForm($exa_usuario);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($exa_usuario = Doctrine_Core::getTable('ExaUsuario')->find(array($request->getParameter('exa_id_usuario'))), sprintf('Object exa_usuario does not exist (%s).', $request->getParameter('exa_id_usuario')));
    $exa_usuario->delete();

    $this->redirect('exausuario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $exa_usuario = $form->save();

      $this->redirect('exausuario/edit?exa_id_usuario='.$exa_usuario->getExaIdUsuario());
    }
  }
}
