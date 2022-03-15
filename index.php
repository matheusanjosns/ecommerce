<?php 
error_reporting(0);

use \Slim\Slim;
use \Hcode\Page;
use Hcode\PageAdmin;

require_once("vendor/autoload.php");

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page;

	$page->setTpl("index");

});

$app->get('/admin', function() {
    
	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->run();

?>