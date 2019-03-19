<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/19/2019
 * Time: 10:35 AM
 */

require_once(__DIR__.'/vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('channel-name');
//$logger->pushHandler(new StreamHandler(__DIR__.'/logs/app.log', Logger::DEBUG));
$logger->pushHandler(new StreamHandler('../logs/app.log', Logger::DEBUG));
$logger->info('This is a log! ^_^ ');
$logger->warning('This is a log warning! ^_^ ');
$logger->error('This is a log error! ^_^ ');

echo "We are logging with pleasure!";