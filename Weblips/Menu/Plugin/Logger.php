<?php

namespace Weblips\Menu\Plugin;

use Weblips\Menu\Console\Command\AddItemCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Logger
{

    private $output;

    public function beforeRun(
    AddItemCommand $command, InputInterface $input, OutputInterface $output
    )
    {
        $output->writeln('work before execute');
    }

    public function aroundRun(
    AddItemCommand $command, \Closure $proceed, InputInterface $input, OutputInterface $output
    )
    {
        $output->writeln('beafore stack -Around');
        //for PHP7
        //$proceed->call($command, $input, $output);
        $proceed->bind($proceed, $input, $output);
        $output->writeln('work around -After- execute');
        $this->output = $output;
    }

    public function afterRun(AddItemCommand $command )
    {
        $this->output->writeln('work after ---Last execute');
    }

}
