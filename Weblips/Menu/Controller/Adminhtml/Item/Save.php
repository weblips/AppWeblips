<?php

namespace Weblips\Menu\Controller\Adminhtml\Item;

use Weblips\Menu\Model\ItemFactory;

class Save extends \Magento\Backend\App\Action {
    
    private $itemFactory;
 //have problem   
    public function __construct(
            \Magento\Backend\App\Action\Context $context, 
            ItemFactory $itemFactory) 
    {
        $this->itemFactory = $itemFactory;
        parent::__construct($context);
    }

    public function execute() {
        $this->itemFactory->create()
                ->setData($this->getRequest()->getPostValue()['general'])
                ->save();
        return $this->resultRedirectFactory->create()->setPath('weblips/index/index');
    }
}

