<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/6/2018
 * Time: 11:46 AM
 */

defined('_JEXEC') or die();

//echo "from the programare.php</br>";

$controller = \Joomla\CMS\MVC\Controller\BaseController::getInstance('Programare');
$controller->execute(\Joomla\CMS\Factory::getApplication()->input->get('task'));
$controller->redirect();