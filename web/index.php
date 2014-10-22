<?php


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('principal', 'inicio', false);
sfContext::createInstance($configuration)->dispatch();
