<?php namespace Wing\Binlog\Console\Command;

use Wing\Binlog\Library\Context;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Wing\FileSystem\WDir;
use Wing\FileSystem\WFile;
use Wing\Library\Module;
use Wing\Library\Modules;
use Wing\Library\WArray;

class ServerStart extends ServerBase{
    protected function configure()
    {
        $this
            ->setName('server:start')
            ->setDescription('服务启动')
            ->addOption("d",null,InputOption::VALUE_NONE,"守护进程")
            ->addOption("debug",null,InputOption::VALUE_NONE,"调试模式");

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $deamon      = $input->getOption("d");
        $debug       = $input->getOption("debug");
        $this->start( $deamon, $debug );
    }
}