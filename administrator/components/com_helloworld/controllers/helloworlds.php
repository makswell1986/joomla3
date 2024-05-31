<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorlds Controller
 *
 * @since  0.0.1
 */
class HelloWorldControllerHelloWorlds extends JControllerAdmin
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 *
	 * @since   1.6
	 * 
	 * 
	

	 */
/* 	public function getModel($name = 'HelloWorld', $prefix = 'HelloWorldModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	} */

	/* public function delete(){
            
		$input=JFactory::getApplication()->input;
		$recs=$input->get('cid',array(),'array');
		$nrecs=$input->get('boxchecked',0,'int');
		$model=$this->getModel('helloworld','helloworldmodel');
		$model->delete($recs);
		$msg="$nrecs record(s) deleted";
		JFactory::getApplication()->enqueueMessage($msg);
		$this->setRedirect(JRoute::_('index.php?option=com_helloworld&view=helloworlds',$msg));

	} */


	public function getModel($name = 'HelloWorld', $prefix = 'HelloWorldModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}