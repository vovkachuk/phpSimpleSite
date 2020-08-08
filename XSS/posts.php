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
	
	<section id='posts-sec'>
	<?php include_once 'logic/print_posts.php'; ?>
	</section>
	<?php else: ?>
	<h1>У вас нет доступа.</h1>
	<h2>Пожалуйста, <a href='signin.php'>войдите</a>
	или <a href='signup.php'>зарегистрируйтесь</a></h2>
<?php endif; ?>
</body>
</html>