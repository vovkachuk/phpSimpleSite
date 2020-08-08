<header>
<nav>
<?php if(isset($_SESSION['user_login'])):?>
<a class="header" href="index.php">Главная</a>
<a class="header" href = "posts.php">Посты</a>
<a class="header" class="header" href = "new_post.php">Опубликовать пост</a>
<?php else: ?>
<a class="header" class="header" href="signin.php">Авторизироваться</a>
<a class="header" class="header" href="signup.php">Зарегистрироваться</a>
<?php endif;?>
</nav>
</header>
<hr>