<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/6/2018
 * Time: 4:31 PM
 */

defined('_JEXEC') or die();

class HelloworldModelHelloworld extends \Joomla\CMS\MVC\Model\BaseDatabaseModel
{
    protected $message;

    public function getMsg()
    {
        if(!$this->message)
        {
            $this->message = "Hello World message set from the model";
        }

        return $this->message;
    }
}