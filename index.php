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
    <h1>Let's Turf It!</h1>
  </div>
  <p>Use the menu above to find out more about The Bowl Field Goal Campaign. Do your part by clicking Donate Now! in the bar above, or clicking the button below.</p>
  <p><a class="btn btn-success btn-md" target="_blank" href="https://secure.e2rm.com/registrant/startup.aspx?eid=127859">Donate Now!</a></p>

</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
