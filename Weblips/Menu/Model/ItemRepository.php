<?php

namespace Weblips\Menu\Model;

use Weblips\Menu\Api\ItemRepositoryInterface;
use Weblips\Menu\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface {
    
    private $collectionFactory;
    
    public function __construct(CollectionFactory $collectionFactory) {
        $this->collectionFactory = $collectionFactory ;
    }
    
    public function getList() {
       return $this->collectionFactory->create()->getItems();
    }
}