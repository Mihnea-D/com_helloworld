<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/15/2018
 * Time: 4:03 PM
 */

defined('_JEXEC') or die();

class HelloworldModelHelloworld extends Joomla\CMS\MVC\Model\BaseDatabaseModel
{
    public function delete($recs)
    {
        $table = $this->getTable('Helloworld', 'HelloworldTable');
        if($recs)
        {
            foreach($recs as $record)
            {
                $table->delete($record);
            }
        }
    }

}