<?php
defined('_JEXEC') or exit();

?>

<form action="index.php?option=com_news&view=news" method="post" id="adminForm" name="adminForm">

<table class="table table-striped tabel-hover">
    <thead>

    <tr>
<th width="1%"><?php echo JText::_('COM_NEWS_NUM'); ?></th>
<th width="2%"><?php echo JHtml::_('grid.checkall'); ?></th>
<th width="1%"><?php echo JText::_('COM_NEWS_NUM_ITEM'); ?></th>
<th width="1%"><?php echo JText::_('COM_NEWS_ITEM_STATE'); ?></th>
<th width="1%"><?php echo JText::_('COM_NEWS_ITEM_ID'); ?></th>
    </tr>
    </thead>
<tfoot>

<tr>
<td colspan="5"></td>
</tr>
</tfoot>


</table>


<input type="hidden" name="task" value="">
<?php echo JHtml::_('form.token');?>
</form>

