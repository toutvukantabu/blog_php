<?php

use App\App;
use App\Table\Article;
use App\Table\Categorie;

$categorie = Categorie::find($_GET['id']);


$article = Article::lastByCategorie($_GET['id']);

if($categorie === false){

App::notFound();
}
App::setTitle($categorie->title);

$categories= Categorie::all();
 ?>
<h1><?= $categorie->title ?></h1>
<div class="row">
    <div class="col-sm-8">
<?php
   
foreach ($article as $post) :  ?>
        <h2>
            <a href="<?= $post->url ?>"><?= $post->title; ?> </a></h2>
            <p><em><?= $post->categorie ?></em></p>
        <p>
            <?= $post->extrait ?></p>
    
    
    <?php endforeach; ?>
    
    </div>

<div class="col-sm-4">
<ul>

<?php foreach(Categorie::all() as $categories): ?>

<li>
<a href="<?= $categories->url?> "> <?= $categories->title?> </a>
</li>
<?php endforeach ?>

</ul>



</div>

</div>
 


