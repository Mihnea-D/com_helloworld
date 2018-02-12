<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/9/2018
 * Time: 1:24 PM
 */

defined('_JEXEC') or die();

class HelloworldTableHelloworld extends \Joomla\CMS\Table\Table
{
    public function __construct( \JDatabaseDriver $db)
    {

        parent::__construct('#__helloworld', 'id', $db);
    }
}