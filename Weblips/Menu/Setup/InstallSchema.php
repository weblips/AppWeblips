<?php

namespace Weblips\Menu\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $installer = $setup;

        $installer->startSetup();
        
        $table = $installer->getConnection()->newTable(
                    $installer->getTable('weblips_sample_item')
                )->addColumn(
                        'id', 
                        Table::TYPE_INTEGER,
                        null,
                        ['identity'=>true , 'nullable' => false, 'primary'=>true],
                        'Item Id'
                )->addColumn(
                        'name',
                        Table::TYPE_TEXT, 
                        255,
                        ['nullable' => false]
                )->addIndex(
                        $installer->getIdxName('weblips_sample_item', ['name']),
                        ['name']
                )->setComment('Sample Items WebLips');
        $installer->getConnection()->createTable($table);
        $installer->endSetup();

       
    }

}
