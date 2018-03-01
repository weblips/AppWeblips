<?php

namespace Weblips\Menu\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {
    protected $_idFieldName = 'id';
    
    protected function _construct() {
        $this->_init(
                \Weblips\Menu\Model\Item::class, 
                \Weblips\Menu\Model\ResourceModel\Item::class);
    }
}