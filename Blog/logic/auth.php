<?php 
require_once 'db.php';

$login = trim( $_POST['login'] );
$psw = trim( $_POST['psw'] );
if( !empty($login) && !empty($psw) ){
	

	$sql = 'SELECT login,password FROM users WHERE login = :login';
	$params = [ ':login' => $login ];
	
	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);
	
	$user = $stmt->fetch(PDO::FETCH_OBJ);
	
	if($user){
		
		if( password_verify($psw, $user->password) ){
			$_SESSION['user_login'] = $user->login;
			header('Location: ../index.php');
		} else{
			echo "Неверный логин или пароль1";
		}
	}else{
			echo "Неверный логин или пароль2";
		}
}else{
	echo "Пожалуйста, заполните поля";
}