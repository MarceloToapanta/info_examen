<?php
/**
* 
*/
class IndentificateForm extends sfForm
{
	
	public function configure() {
		$this->setWidgets(array(
      	'usuario'      => new sfWidgetFormInputText(array(), array('autocomplete'=>'off')),
      	'contrasena' => new sfWidgetFormInputPassword(),
    ));
	}
}

?>