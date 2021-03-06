<?php require_once('couch/cms.php'); ?>
<cms:template title='Home' />
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Frank Veldhuijzen - Home</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container" id="container">
    <div class="row">
      <ul class="nav nav-tabs" role="tablist" id="navbar">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="news.php">Nieuws</a></li>
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
        <cms:editable name='Home' type='richtext'>
        <p>
          Frank Veldhuijzen most recently served as director/co-owner of Clinical Devices, a distributor for Navilyst, PFM, Dry Pro, SCW and Demax. His company Clinical Devices (founded 2009) was sold in 2013 to Angiodynamics.
        </p>
        <p>
          Frank worked 14 years for Boston Scientific, where he pioneered and developed direct sales in Interventional Cardiology in Netherlands. He introduced new products like PCI balloons, fluid delivery systems, stents, Drug Eluting Stents and imaging catheter-systems. His main skills were new products introductions and Therapy development. From 1982-1995 Frank worked in the Catharina hospital in Eindhoven, mainly in the cath labs.
        </p>
        <p>
          In the spare moments Frank is not working and guiding businesses to success, Frank is passionate about road and mountain biking.
        </p>
        <p>
          As a consultant Frank can offer you a highly driven individual who can work under pressure. A team player who always strives to achieve targets and works hard to meet deadlines.
        </p>
        <p>
          Frank has a good and varied knowledge of the market and the customers, with a wide experience, clinically and sales.
        </p>
        <p>
          For companies who need skilled people for the introduction of new products or to support clinical studies. Frank is your man!
        </p>
        <p>
          Specialties:
          <ul>
            <li>Interventional Cardiology</li>
            <li>Interventional Radiology</li>
            <li>Vascular Access (Picc, Ports)</li>
          </ul>
        </p>
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
