<?php

namespace Weblips\Menu\Block;

use Magento\Framework\View\Element\Template;
use Weblips\Menu\Model\ResourceModel\Item\Collection;
use Weblips\Menu\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template {

    private $collectionFactory;

    public function __construct(
    Template\Context $context, CollectionFactory $collectionFactory, array $data = array()
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }
    
    
    public function getItems(){
        return $this->collectionFactory->create()->getItems();
    }
    
}
