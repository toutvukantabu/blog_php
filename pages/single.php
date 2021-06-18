<?php
use App\App;

$post = $db->prepare('SELECT * from articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);

?>

<h1><?= $post->title ?></h1>

<p><?= $post->content ?></p>