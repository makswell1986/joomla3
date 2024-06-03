<?php
defined('_JEXEC') or exit();

class NewsViewNews extends JViewLegacy{

public function display($tpl=null){

$this->addToolBar();
parent::display($tpl);
$this->setDocument();

}

protected function addToolBar(){


JToolbarHelper::title(JText::_('COM_NEWS'));
JToolbarHelper::addNew('item.add');
JToolbarHelper::editList('item.edit');
JToolbarHelper::deleteList('news.delete');
}

protected function setDocument(){

$document=JFactory::getDocument();
$document->setTitle(JText::_('COM_NEWS_ADMINISTRATION'));

}

}