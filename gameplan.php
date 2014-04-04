<!DOCTYPE html>
<html>
  <head>
    <title>Let's Turfit!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">

    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <!--<script src="js/html5shiv.js"></script>-->
      <!--<script src="js/respond.min.js"></script>-->
    <![endif]-->

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-44023331-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
  </head>
  <body>
  <div class="container">

<?php
    require_once('header.php');
    echo print_header('');
?>

    <div class="page-header">
        <h1>Game Plan</h1>
    </div>

  <div class="row">
    <div class="col-md-12 text-center">
      <img src="images/maparrow.png" alt="Map" title="Click here to get the overall picture" style="width:75%" class="img-rounded" />
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <dl class="dl-horizontal">
        <dt>Phase 1</dt>
        <dd>Installation of:
          <ul>
            <li>A CFL regulation artificial turf football field</li>
            <li>Field lighting</li>
            <li>Score clock</li>
            <li>Sound system</li>
          </ul>
          Estimated Cost = $4.2M
        </dd>
      </dl>
    </div>

    <div class="col-md-6">
      <dl class="dl-horizontal">
        <dt>Phase 2</dt>
        <dd>Improvements to on-site amenities such as:
          <ul>
            <li>Dressing rooms</li>
            <li>Equipment storage*</li>
            <li>Concession</li>
            <li>Meeting rooms*</li>
            <li>Public washrooms</li>
            <li>Shared office space*</li>
            <li>Ticket office*</li>
            <li>Entrance plaza*</li>
          </ul>
          <small>*still in development</small><br>
          Estimated Cost = $6.8M
        </dd>
      </dl>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </div>
  </body>
</html>
