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
	<form action="logic/add_post.php" method="post">
	<h1>Добавить пост</h1>
	<label>Тема поста</label>
	<input type="text" name="newPost__title", value="">
	<br>
	<label>Пост</label>
	<input class="blog" type="text" name="newPost__text", value="">
	<br>
	<button type = "submit">Добавить</button>
	</form>
	
	<?php else: ?>
	
	<h1>У вас нет доступа.</h1>
	<h2>Пожалуйста, <a href='signin.php'>войдите</a>
	или <a href='signup.php'>зарегистрируйтесь</a></h2>
<?php endif; ?>
</body>
</html>