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
 
 /* namespace project name/category/example; */
 
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
if (!$loader = require_once __DIR__.'/../vendor/autoload.php') {
    die('You must set up the project dependencies.');
}
require_once '../SplClassLoader.php';
$classLoader = new SplClassLoader('ServiceStatusCheck', 'src');
$classLoader->register();

$app = new \Cilex\Application('ServiceStatusCheck');
$app->command(new \ServiceStatusCheck\Command\HelloWorld());
$app->command(new \Cilex\Command\GreetCommand());
$app->run();
