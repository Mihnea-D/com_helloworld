<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/9/2018
 * Time: 11:57 AM
 */
defined('_JEXEC') or die();

class HelloworldModelHelloworld extends \Joomla\CMS\MVC\Model\BaseDatabaseModel
{
    protected $message;

    public function getMsg()
    {
        if(!isset($this->message))
        {
            $this->message = "Hello World set from the model";
        }

        return $this->message;
    }
}