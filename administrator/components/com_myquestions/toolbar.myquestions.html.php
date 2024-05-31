<?php
defined('_JEXEC') or die('Restricted access');
class TOOLBAR_myquestions
{
  function _REPLY()
  {
    JToolBarHelper::title(JText::_('COM_MYQUESTIONS_TOOLBAR_TITLE'), 'generic.png');
    JToolBarHelper::custom('sendToExpert', 'send.png', '', 'COM_MYQUESTIONS_TOOLBAR_SEND_TO_EXPERT', false);
    JToolBarHelper::custom('sendAnswer', 'send.png', '', 'COM_MYQUESTIONS_TOOLBAR_SEND_ANSWER', false);
    JToolBarHelper::save();
    JToolBarHelper::apply();
    JToolBarHelper::cancel();
  }

  function _DEFAULT()
  {
    JToolBarHelper::title(JText::_('COM_MYQUESTIONS_TOOLBAR_TITLE'), 'generic.png');
    JToolBarHelper::editList('reply','COM_MYQUESTIONS_REPLY');
JToolBarHelper::deleteList(JText::_('COM_MYQUESTIONS_TOOLBAR_REMOVE_QUESTIONS_CONFIRMATION'));
  }
}
?>