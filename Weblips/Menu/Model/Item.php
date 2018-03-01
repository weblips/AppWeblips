<?php

namespace Weblips\Menu\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel {
    protected function _construct() {
        $this->_init(\Weblips\Menu\Model\ResourceModel\Item::class);
    }
}