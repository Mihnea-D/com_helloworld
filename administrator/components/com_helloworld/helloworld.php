<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/6/2018
 * Time: 1:37 PM
 */

defined('_JEXEC') or die();

$controller = \Joomla\CMS\MVC\Controller\BaseController::getInstance('Helloworld');
$input = \Joomla\CMS\Factory::getApplication()->input->get('task');
$controller->execute($input);
$controller->redirect();