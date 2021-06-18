<?php

 use App\Table\Article;

foreach (Article::getLast() as $post) :  ?>
<?php var_dump($post) ?>

    <h2>
        <a href="<?= $post->url ?>"><?= $post->title; ?></a></h2>
    <p>
        <?= $post->extrait ?></p>


<?php endforeach; ?>

 

