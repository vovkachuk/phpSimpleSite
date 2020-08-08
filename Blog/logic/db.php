<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'blog';
$db_user = 'user';
$db_pass = 'password';
$charset = 'utf8';
$time = getdate();
$UNIXtime = $time[0];


$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try{
$pdo = new PDO("$driver:host=$host; dbname=$db_name; charset=$charset", 
$db_user, $db_pass, $options);

session_start();

} catch(PDOException $e){
	die("Не могу подключиться к базе данных");
}

