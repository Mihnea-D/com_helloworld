<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/6/2018
 * Time: 1:40 PM
 */

defined('_JEXEC') or die();

//echo "hello world from the front end";

$controller = \Joomla\CMS\MVC\Controller\BaseController::getInstance('Helloworld');
$input = \Joomla\CMS\Factory::getApplication()->input->getCmd('task');
$controller->execute($input);
$controller->redirect();