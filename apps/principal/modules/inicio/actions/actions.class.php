<?php

/**
 * inicio actions.
 *
 * @package    info_examen
 * @subpackage inicio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inicioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   		$examen=Doctrine_Core::getTable('ExaExamen')->getExamen($request->getParameter('nombre'));
   		//sfContext::getInstance()->getLogger()->info("===================== Request " . var_export($examen, true));
      $parfiltro=$request->getParameter('filtro');
   		$parnombre="%".$request->getParameter('nombre')."%";
   		//$this->examenes=Doctrine_Core::getTable('ExaExamen')->findAll();	
      if($parfiltro=="nombre"){
   		$this->examenes=Doctrine_Core::getTable('ExaExamen')
  		->createQuery('exa')
        ->select('exa.exa_id_examen as id,exa.exa_id_tipo_examen as tipo, exa.exa_nombre_examen as nombre,exa.exa_observacion as observacion')
        ->where('exa.exa_nombre_examen like ?', $parnombre)
        ->orderBy('exa.exa_nombre_examen asc')
    	->execute();
      }
      else{
        $q= Doctrine_Query::create()
        ->select('exa.exa_id_examen as id,exa.exa_id_tipo_examen as tipo, exa.exa_nombre_examen as nombre,exa.exa_observacion as observacion')
        ->from('ExaExamen exa,ExaTipoExamen tip')
        ->where('exa.exa_id_tipo_examen = tip.ete_id_tipo_examen and ete_nombre_examen like'."'". $parnombre."'")
        ->orderBy('ete_nombre_examen asc')
        ->execute();
      $this->examenes=$q;

      }
  }
  
}

