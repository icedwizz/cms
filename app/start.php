<?php
/*SETUP*/

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localhost/cms/');

$servername = "localhost";
$username = "root";
$password = "";


try{
$conn = new PDO("mysql:host=$servername; dbname=cms", $username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connected Successfully";
}

catch(PDOException $e){
  echo "Connection failure: " . $e->getMessage();
}
