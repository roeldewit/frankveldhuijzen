<?php require_once('couch/cms.php'); ?>
<cms:template title='Nieuws' />
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Frank Veldhuijzen - Nieuws</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container" id="container">
    <div class="row">
      <ul class="nav nav-tabs" role="tablist" id="navbar">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="news.php">Nieuws</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="jumbotron" id="jumbotron">
      <div class="row">
        <img src="images/logo.png" alt="" class="center-block" />
      </div>
      <div class="row">
        <h1 id="name" class="text-center">Frank Veldhuijzen</h1>
      </div>
      <div class="row">
        <p id="function" class="text-center">Medical Product Advisor</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <cms:editable name='Nieuws' type='richtext'>
        <p>Dit is een test.</p>
      </cms:editable>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div id="slogan">
        <h3 class="text-center" id="slogan-text">ZORGT VOOR ZORG</h3>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="container">
    <p class="text-center">
      <br />
      <strong>&copy; 2014 Frank Veldhuijzen</strong>
    </p>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>
