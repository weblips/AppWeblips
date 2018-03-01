<?php

namespace Weblips\Menu\Cron;

use Weblips\Menu\Model\ItemFactory;
use Weblips\Menu\Model\Config;

class AddItem {
    
    private $itemFactory;
    private $config;
    
    public function __construct(ItemFactory $itemFactory, Config $config) {
        $this->itemFactory = $itemFactory;
        $this->config = $config;
    }
    
    public function execute(){
        if($this->config->isEnabled()){
            $this->itemFactory->create()
                ->setName('Scheduled item2')
                ->setDescription('Created at ' . time())
                ->save();
        }
    }
}