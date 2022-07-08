<?php


$host = 'remotemysql.com';
$db = 'g1gIWGjJsM';
$user = 'g1gIWGjJsM';
$pass = 'o92qJla1Ib';
$charset = 'utf8mb4';


//$conn = new PDO($host,$db, $user, $pass);
$conn = new PDO('mysql:host=' . $host .';port=3306;dbname='.$db,
    $user,
    $pass,
    array(PDO::ATTR_PERSISTENT => true));

?>