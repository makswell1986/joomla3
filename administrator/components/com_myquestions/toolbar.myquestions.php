
<?php
defined('_JEXEC') or die('Restricted access');
require_once(JApplicationHelper::getPath('toolbar_html'));
switch($task)
{
  case 'reply':
    TOOLBAR_myquestions::_REPLY();
    break;
  default:
    TOOLBAR_myquestions::_DEFAULT();
    break;
}
?>