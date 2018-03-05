<?php

namespace Weblips\Menu\Ui;

use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider {

    protected $collection;
    
    public function __construct(
            $name,
            $primaryFieldName, 
            $requestFieldName, 
            $collectionFactory,
            array $meta = array(), 
            array $data = array()) 
            {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
    
    public function getData() {
        $result = [];
        
        foreach ($this->collection->getItems() as $item){
            $result[$item->getId()]['general'] = $item->getData();
        }
        
        return $result;
    }
    
}
