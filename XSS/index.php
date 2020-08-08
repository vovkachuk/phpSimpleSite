<?php require_once 'logic/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php include_once 'parts/header.php';?>
	<?php if( isset($_SESSION['user_login'])): ?>
	<div class="hello">
	<h1>Добро пожаловать, <?php echo $_SESSION['user_login']; ?></h1>
	<a class="ex" href="logic/logout.php">Выйти из аккаунта</a>
	<br></div>
	
	<?php else: ?>
	
	<h1>У вас нет доступа.</h1>
	<h2>Пожалуйста, <a href='signin.php'>войдите</a>
	или <a href='signup.php'>зарегистрируйтесь</a></h2>
<?php endif; ?>
</body>
</html>