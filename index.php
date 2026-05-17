<?php
use Pecee\SimpleRouter\SimpleRouter;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('ROOT_DIR', __DIR__ . '/');
define ('APP_DIR', ROOT_DIR . 'app');
define ('VIEWS' , APP_DIR . '/views');
/* Load external routes file */



require_once APP_DIR . '/router/routes.php';
/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('\Demo\Controllers');


// Start the routing
SimpleRouter::start();