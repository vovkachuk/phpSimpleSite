<?php
require_once 'db.php';


$post_title = $_POST['newPost__title'];
$post_text = $_POST['newPost__text'];

if ( empty($post_title) || empty($post_text)){
	die('Заполните все поля');
}

	
	$sql = 'INSERT INTO posts(title, text, login) VALUES(:title, :text, :login)';
	
	$params =[ 'title' => $post_title,
			   ':text'  => $post_text,
			   ':login' => $_SESSION['user_login']];
	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);
	
	header('Location: ../posts.php');;
	
	