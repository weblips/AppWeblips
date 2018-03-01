<?php

namespace Weblips\Menu\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface {

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context) {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '2.0.4', '<')) {
            $setup->getConnection()->update(
                    $setup->getTable('weblips_sample_item'), [
                'description' => 'I`am description first'
                    ], $setup->getConnection()->quoteInto('id = ?', 1)
            );
        }
        $setup->endSetup();
    }

}
