<?php 
use App\App;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title><?= App::getTitle() ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
       <a href="#" class="navbar-brand">coucou</a>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template" style ="padding-top: 100px ">
<?= $content; ?>
      </div>

    </main><!-- /.container -->


  </body>
</html>
