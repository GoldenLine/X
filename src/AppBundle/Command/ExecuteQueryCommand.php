<?php

namespace AppBundle\Command;

use AppBundle\Lib\System;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExecuteQueryCommand extends Command
{
    /**
     * @var System
     */
    private $system;

    public function __construct(System $system)
    {
        parent::__construct();
        $this->system = $system;
    }

    protected function configure()
    {
        $this
            ->setName('execute:query')
            ->addArgument('query', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write($this->system->executeQuery($input->getArgument('query')));
    }
}
