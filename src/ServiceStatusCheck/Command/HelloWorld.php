<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the ServiceStatusCheck.
 *
 * @copyright  2013- Kenichi.Koyama
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
 namespace ServiceStatusCheck\Command;
 
/**
 * Hello World Command.
 *
 * Long description for file (if any)...
 *
 * @author     Kenichi.Koyama
 *
 * @version    0.1
 *
 */
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Cilex\Command\Command;
 
/**
 * Example command for testing purposes.
 */
class HelloWorld extends Command
{
    protected function configure()
    {
        $this
        ->setName('hello:country')
        ->setDescription('Hello xxx.')
        ->addArgument('country', InputArgument::OPTIONAL, 'Where from your country?')
        ->addOption('upper', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = 'Hello';
        $country = $input->getArgument('country');
        if ($country) {
            $text .= ' '.$country;
        }

        if ($input->getOption('upper')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}