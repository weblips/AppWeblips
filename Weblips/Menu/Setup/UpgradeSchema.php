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
        
        if (version_compare($context->getVersion(), '2.2.0', '<=')) {
            $setup->getConnection()->addColumn(
                    $setup->getTable('sales_order_grid'), 'base_tax_amount', [
                'type' => Table::TYPE_DECIMAL,
                'comment' => 'Base Tax Amount'
                    ]
            );
        }

        $setup->endSetup();
    }

}
