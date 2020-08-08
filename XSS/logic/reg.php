<?php 
require_once 'db.php';

$login = trim( $_POST['login'] );
$psw = trim( $_POST['psw'] );
if( !empty($login) && !empty($psw) ){
	
	$sql_check = 'SELECT EXISTS( SELECT login FROM users WHERE login = :login )';
	$stmt_check = $pdo->prepare($sql_check);
	$stmt_check->execute([':login' => $login]);
	
	if ($stmt_check->fetchColumn() ){
		die('Пользователь с таким именем уже существует');
	}
	
	$psw = password_hash($psw, PASSWORD_DEFAULT);
	
	$sql = 'INSERT INTO users(login,password) VALUES(:login,:psw)';
	$params = [ 'login' => $login, ':psw' => $psw];
	
	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);
	
	echo 'Вы успешно зарегистрировались!';
}else{
	echo 'Пожалуйста, заполните все поля';
}
?>
<br>
<a href="../signin.php">Страница авторизации</a>