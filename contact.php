<?php require_once('couch/cms.php'); ?>
<cms:template title='Contact' />
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
        <li><a href="news.php">Nieuws</a></li>
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
        <cms:editable name='Contactgegevens' type='richtext'>
        <p>
          Frank Veldhuijzen <br>
          Snoertsebaan 2 <br>
          5757PB Liessel <br>
          +31 (0)6 53787664 <br>
          info@frankveldhuijzen.nl <br>
        </p>
      </cms:editable>
    </div>
    <div class="col-md-8">
      <cms:form action='' method='post' id='contact_form'>
      <div class="namediv">
        <label for="name">Naam</label>
        <br />
        <cms:input type='text' name='name' id='name' />
        <p id="name_error" class="error">Vul een naam in.</p>
      </div>
      <div class="emaildiv">
        <label for="email">E-mailadres</label>
        <br />
        <cms:input type='text' name='email' id='email' />
        <p id="email_error" class="error">Vul een geldig e-mailadres in.</p>
      </div>
      <div class="messagediv">
        <label for="message">Bericht</label>
        <br />
        <cms:input type='textarea' name='message' id='message' rows='8' cols='50' />
        <p id="message_error" class="error">Vul een bericht in.</p>
      </div>
      <div id="button">
          <input type='submit' id='send_message' class="button btn btn-default" value='Verstuur' />
          </div>
    </cms:form>
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
