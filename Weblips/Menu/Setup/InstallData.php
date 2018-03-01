<?php

namespace Weblips\Menu\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->insert(
                $setup->getTable('weblips_sample_item'),
                [
                   'name' => 'Test Item 1' 
                ]);
        $setup->getConnection()->insert(
                $setup->getTable('weblips_sample_item'),
                [
                   'name' => 'Test Item 2' 
                ]);
        $setup->endSetup();
    }
}