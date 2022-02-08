<?php 
error_reporting(0);

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Hcode\DB\SQL();
	
    $RESULTADOS = $sql->SELECT("SELECT * FROM TB_USERS");

	echo json_encode($RESULTADOS);

});

$app->run();

 ?>