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
    //protected $message; //cap 1-5
    protected $messages;
    //protected $result; // ideile mele

    public function getMsg()
    {
        $input = \Joomla\CMS\Factory::getApplication()->input;
        $id = $input->get('id', 1, 'INT');

        //Cap1-5
        /*if(!$this->message)
        {
            //$this->message = "Hello World message set from the model";

            switch ($id)
            {
                case 2: $this->message="Good Bye World message set by the model based on the variable in the menu type";
                        break;
                case 1:
                default: $this->message = "Hello World message set by the model based on the variable in the menu type";
                    break;
            }
        }

        return $this->message;*/

        //Cap. 6

        if(!is_array($this->messages))
        {
            $this->messages = array();
        }

        if(!isset($this->messages[$id]))
        {
            $table = $this->getTable();
            $table->load($id);
            //var_dump($table);
            $this->messages[$id] = $table->greeting;
        }

        return $this->messages[$id];

    }

    public function getTable($name = 'Helloworld', $prefix = 'HelloworldTable', $options = array())
    {
        //return \Joomla\CMS\Table\Table::getInstance($name, $prefix, $options);

        return parent::getTable($name, $prefix, $options); // TODO: Change the autogenerated stub

    }

    /*public function getResult()
    {
        //ideea mea
        if(!$this->result)
        {
            $this->result = "Result has been not set";
        }

        return $this->result;
    }

    public function setResult($term = null)
    {
        //idea mea
        $this->result = $term;
        var_dump($this);
        return;
    }*/
}