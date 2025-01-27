<?php 
require 'environment.php';

$config = array();
define("BASE_URL","localhost:80/Filmes");

// if(ENVIRONMENT == 'development'){
// 	define("BASE_URL","http://localhost/mvc(2)/");
// 	$config['dbname'] = 'estrutura_mvc';
// 	$config['host'] = 'localhost';
// 	$config['dbuser'] = 'root';
// 	$config['dbpass'] = '';
	

// }else{
// 	define("BASE_URL","http://meusite.com.br");
//     $config['dbname'] = 'estrutura_mvc';
// 	$config['host'] = 'localhost';
// 	$config['dbuser'] = 'root';
// 	$config['dbpass'] = '';
// }

global $db;


$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$db = new mysqli($servername, $username, $password, $database);


//$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);


// }
// catch(PDOException $e){
// 	echo "Erro:".$e->getMessage();
// 	die;
// }


?>