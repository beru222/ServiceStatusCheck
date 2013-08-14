<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Short namespace description for file
 *
 * Long description for file (if any)...
 *
 * @copyright  1997-2005 example
 *
 * @license    License Name
 */
 
 namespace ServiceStatusCheck\Tests\Command;
 
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * @author     Kenichi.Koyama
 *
 * @version    
 *
 */
 /*
 use Symfony\Component\Console\Input\InputArgument;
 use Symfony\Component\Console\Input\InputInterface;
 use Symfony\Component\Console\Input\InputOption;
 use Symfony\Component\Console\Output\OutputInterface;
 use Cilex\Command\Command;
 
 class CommandMock extends Command {}
 */
// require_once __DIR__ .'/../../../../src/ServiceStatusCheck/Command/HelloWorld.php';
use ServiceStatusCheck\Command\HelloWorld;
 
 
 /**
  * Command\Command test cases.
  *
  * @author Mike van Riel <mike.vanriel@naenius.com>
  */
 class HelloWorldTest extends \PHPUnit_Framework_TestCase
 {
     /** @var \Cilex\Command\Command */
     //protected $fixture = null;
     protected static $srcPath;
 
     /**
      * Sets up the test fixture.
      */
     public function setUp()
     {
         self::$srcPath = realpath(__DIR__ .'/../../../../src/');
         //$this->fixture = new CommandMock('hello:country');
         //$this->helloWolrd = new HelloWorld;
     }
 
     /**
      * Tests the getContainer method.
      */
     public function testExecute()
     {
         //$obj = new HelloWorld;
         
         $last_line = system('php ' .self::$srcPath .'Run.php hello:country Japan', $retval);
         $this->assertEquals("Hello Japan\n", $retval);
     }
  }