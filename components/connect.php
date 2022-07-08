<?php

//$db_name = 'mysql:host=localhost;dbname=shop_db';
//$user_name = 'root';
//$user_password = '';

$host = 'remotemysql.com';
$db_name = 'g1gIWGjJsM';
$user_name = 'g1gIWGjJsM';
$user_password = 'o92qJla1Ib';
$charset = 'utf8mb4';


$conn = new PDO($host,$db_name, $user_name, $user_password);

?>