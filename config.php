<?php 
require 'environment.php';

$config = array();
define("BASE_URL","http://localhost:80/L5-Networks/");

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


try{
$servername = "localhost";
$username = "root";
$password = "";
$database = "filmes";


//$db = new mysqli($servername, $username, $password, $database);
$db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);



}
catch(Exepction $e){
	echo $e;	
}



?>