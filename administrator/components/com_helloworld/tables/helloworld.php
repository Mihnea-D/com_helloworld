<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/7/2018
 * Time: 3:29 PM
 */

defined('_JEXEC') or die();

class HelloworldTableHelloworld extends \Joomla\CMS\Table\Table
{
    public function __construct($db)
    {
        parent::__construct('#__helloworld', 'id', $db);
    }

}