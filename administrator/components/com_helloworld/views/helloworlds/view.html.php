<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/13/2018
 * Time: 1:56 PM
 */

defined('_JEXEC') or die();

class HelloworldViewHelloworlds extends \Joomla\CMS\MVC\View\HtmlView
{
    public function display($tpl = null)
    {
        //Nu prea inteleg nimic de pe aici.. :(

        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');

        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));

            return false;
        }

        return parent::display($tpl); // TODO: Change the autogenerated stub
    }
}