<?php

namespace Weblips\Menu\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

//class Index extends \Magento\Framework\Backend\App\Action\Action {
class Index extends \Magento\Backend\App\Action {
    
    public function execute() {
        
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        
        $result->setContents('Hello Admins!!!');
        
        return $result;
    }
}

