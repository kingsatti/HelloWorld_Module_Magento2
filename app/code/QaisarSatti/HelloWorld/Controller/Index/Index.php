<?php
    /**
    * Catalog Product Rewrite Helper
    *
    * @category    QaisarSatti
    * @package     QaisarSatti_HelloWorld
    * @author      Muhammad Qaisar Satti
    * @Email       qaisarssatti@gmail.com
    *
    */
namespace QaisarSatti\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action

{

	public function execute()
	{      
		$this->_view->loadLayout();
		$this->_view->renderLayout();
	}

}
