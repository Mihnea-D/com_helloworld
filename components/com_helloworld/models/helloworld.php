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
        $app = \Joomla\CMS\Factory::getApplication();
        $id = $app->input->get('id', 1, 'INT');

        if(!isset($this->message))
        {
            switch($id)
            {
                case 2: $this->message = "Good bye world based on the menu variable";
                        break;
                case 1:
                default: $this->message = "Hello World based on the menu variable";
                        break;
            }

        }

        return $this->message;
    }
}