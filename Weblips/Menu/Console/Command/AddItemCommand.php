<?php

namespace Weblips\Menu\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\Console\Cli;
use Weblips\Menu\Model\ItemFactory;

class AddItemCommand extends Command {

    const INPUT_KEY_NAME = 'name';
    const INPUT_KEY_DESCRIPTIN = 'description';

    private $itemFactory;

    public function __construct(ItemFactory $itemFactory) {
        $this->itemFactory = $itemFactory;
        parent::__construct();
    }

    protected function configure() {
        $this->setName('weblips:item:add')
                ->addArgument(
                        self::INPUT_KEY_NAME, InputArgument::REQUIRED, 'Item name'
                )->addArgument(
                self::INPUT_KEY_DESCRIPTIN, InputArgument::OPTIONAL, 'Item description'
        );
        parent::configure();
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $item = $this->itemFactory->create();
        $item->setName($input->getArgument(self::INPUT_KEY_NAME));
        $item->setDescription($input->getArgument(self::INPUT_KEY_DESCRIPTIN));
        $item->setIsObjectNew(true);
        $item->save();
        return Cli::RETURN_SUCCESS;
    }
}
