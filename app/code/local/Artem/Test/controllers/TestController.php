<?php
class Artem_Test_TestController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		echo Mage::getStoreConfig('general/general/test_data');
	}
}
