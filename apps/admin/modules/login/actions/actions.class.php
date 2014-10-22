<?php

/**
 * login actions.
 *
 * @package    info_examen
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->formulario = new IndentificateForm();
    if($request->isMethod('post')){
    	$usuario=$request->getParameter('usuario');
    	$contrasena=$request->getParameter('contrasena');

    	$q= Doctrine_Query::create()
        ->select('exa_id_usuario as id,exa_nombre_usuario as nombre, exa_permiso_usuario as permiso, 
        	exa_login as login, exa_pass_usuario as pass')
        ->from('ExaUsuario')
        ->where('exa_login ='."'".$usuario."'" .' and exa_pass_usuario ='."'". $contrasena."'")
        ->execute();

    	
    	if ($usuario==$q[0]["exa_login"] && $contrasena==$q[0]["exa_pass_usuario"]){
    		$this->getUser()->setAuthenticated(true);
    		$this->getUser()->setAttribute('nombre', $q[0]["exa_nombre_usuario"]);
    		$this->redirect('panel/index');
    	}else{
    		$this->getUser()->setAuthenticated(false);
    		$this->getUser()->setFlash("error", "Datos incorrectos");
    	}
    	/**/
    }
  }
}
