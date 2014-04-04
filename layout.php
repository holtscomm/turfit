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
        <h1>Facility Layout</h1>
    </div>

  <div class="row">
    <div class="col-md-3">
      <h3>The Bowl: Revised Facility Layout</h3>
        <ol>
          <li>Entrance plaza with ticket office</li>
          <li>Existing change room building</li>
          <li>Existing west side bleachers</li>
          <li>Existing east side bleachers</li>
          <li>New artifical turf field</li>
          <li>Team area</li>
          <li>Pre-game warm-up area</li>
          <li>New service building</li>
          <li>Concession/Public washrooms</li>
          <li>Equipment storage</li>
          <li>Existing press box</li>
          <li>Existing grass berm</li>
        </ol>
    </div>
    <div class="col-md-6 text-right">
      <img src="images/gameplanmap.png" alt="Map" style="width:100%; height:100%" />
    </div>
    <div class="col-md-3">
        <h3>Three Points to Win</h3>
        <ol>
          <li><b>SAFE</b> - Current demand for the field leaves the grass surface in sub-par, unsafe conditions. Artificial turf does not require rest between uses to regenerate - it's always safe, it's always ready</li>
          <li><b>ACCESSIBLE</b> - Artificial turf lengthens the playing season and field lighting increases daily playing times by several hours - this means more games and practices for more athletes over a longer season.</li>
          <li><b>SUSTAINABLE</b> - The life cycle of an artificial turf field is 15 years. It has less long-term costs and allows for increased diversity of sport, whereas the current natural grass surface has a very short life span and requires maintenance practices that are neither economical nor sustainable</li>
    </div>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </div>
  </body>
</html>
