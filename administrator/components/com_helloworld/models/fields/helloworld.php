<?php
/**
 * Created by PhpStorm.
 * User: SKEPSIS-DEV40
 * Date: 2/8/2018
 * Time: 12:53 PM
 */

defined ('_JEXEC') or die();

JFormHelper::loadFieldClass('list');

class JFormFieldHelloworld extends JFormFieldList
{
    protected $type = 'helloworld';

    protected function getOptions()
    {
        $db = \Joomla\CMS\Factory::getDbo();
        $query = $db->getQuery(true);
        $query->select($db->qn(array('id', 'greeting')))
            ->from($db->qn('#__helloworld'));
        $db->setQuery($query);
        $db->execute();

        $result = $db->loadObjectList();
        $options = array();

        foreach ($result as $row)
        {
            $options[] = JHtml::_('select.option', $row->id, $row->greeting);
        }

        //var_dump($options);die();

        $options = array_merge(parent::getOptions(), $options);

        return $options;


        //return parent::getOptions(); // TODO: Change the autogenerated stub
    }

}