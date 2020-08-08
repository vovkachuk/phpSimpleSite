<?php
require_once 'db.php';
$sql = 'SELECT id, unix_timestamp(time) AS time FROM posts WHERE op = 1';
$result = $pdo->query($sql);
$q = False;
while( $post = $result->fetch(PDO::FETCH_OBJ)){
	if(($UNIXtime - $post->time) > 60){
		$q = True;
	}
}
if($q){
	$sql = 'UPDATE posts SET op = 0 WHERE op = 1';
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	 die('Все посты удалены!');
}

$sql = 'SELECT * FROM posts WHERE op = 1';
$result = $pdo->query($sql);
while( $post = $result->fetch(PDO::FETCH_OBJ)):
?>
<div class="post_container" id =<?php echo 'post_' . $post->id; ?> 
data-post-id=<?php echo $post->id;?>>
<h3 class="post__title"><?php echo $post->title; ?></h3>
<p class="post__text"><?php echo $post->text; ?></p>
<br>
<h4 class="post__user">Автор: <?php echo $post->login; ?></h4>
<h4 class="post__title">Время публикации: <?php echo $post->time; ?></h4>
</div>
<hr>
<br>
<?php endwhile; ?>
