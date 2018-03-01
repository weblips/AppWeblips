<?php

namespace Weblips\Menu\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface {

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '2.0.4', '<')) {

            $setup->getConnection()->addColumn(
                    $setup->getTable('weblips_sample_item'), 'description', [
                'type' => Table::TYPE_TEXT,
                'nullable' => false,
                'comment' => 'Item Description'
                    ]
            );
        }

        $setup->endSetup();
    }

}
