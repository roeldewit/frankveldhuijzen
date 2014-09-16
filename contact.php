<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Frank Veldhuijzen - Contact</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container" id="container">
    <div class="row">
      <ul class="nav nav-tabs" role="tablist" id="navbar">
        <li><a href="index.html">Home</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
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
      <div class="col-md-2 col-md-offset-1">
        <p>
          Frank Veldhuijzen <br>
          Snoertsebaan 2 <br>
          5757PB Liessel <br>
          +31 (0)6 53787664 <br>
          info@frankveldhuijzen.nl <br>
        </p>
      </div>
      <div class="col-md-8">

        <?php

        if (isset($_GET['s'])) {
          echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";
        } else if ($_GET['e']) {
          echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";
        }

        ?>

        <form role="form" method="POST" action="contact-submit.php">
          <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" placeholder="Naam" name="name">
          </div>
          <div class="form-group">
            <label for="email">E-mailadres</label>
            <input type="email" class="form-control" id="email" placeholder="E-mailadres" name="email">
          </div>
          <div class="form-group">
            <label for="message">Bericht</label>
            <textarea class="form-control" rows="5" id="message" placeholder="Bericht" name="message"></textarea>
          </div>
          <div class="form-actions">
            <input type="hidden" name="save" value="contact">
            <button type="submit" class="btn btn-default" id="form-button">Verstuur</button>
          </div>
        </form>
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