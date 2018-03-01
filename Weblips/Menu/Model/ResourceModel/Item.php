<?php
namespace Weblips\Menu\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb {
    
    protected function _construct() {
        $this->_init('weblips_sample_item', 'id');
    }
}

