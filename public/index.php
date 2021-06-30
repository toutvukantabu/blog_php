
<?php

use App\App;
use App\Config;
use App\Autoloader;

require '../app/Autoloader.php';

Autoloader::register();

$app= App::getInstance();
$app->title = "titre de test";

echo $app->title;

?>
