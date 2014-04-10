<!DOCTYPE html>
<html>
  <head>
    <title>Let's Turfit!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Contact Us - The Bowl Field Goal Campaign" />
    <meta property="og:image" content="images/fieldgoalcolor.png" /> 
    <meta property="og:description" content="Contact Us page for The Bowl Field Goal Campaign!" />
    <meta property="og:url" content="http://<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">

    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">

    <style>
        
    </style>

    <!-- AddThis Smart Layers BEGIN -->
    <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5342337c6f476df6"></script>
    <script type="text/javascript">
      addthis.layers({
        'theme' : 'transparent',
        'share' : {
          'position' : 'left',
          'numPreferredServices' : 5
        }, 
        'follow' : {
          'services' : [
            {'service': 'facebook', 'id': 'thebowlcampaign'},
            {'service': 'twitter', 'id': 'thebowlcampaign'}
          ]
        }
      });
    </script>
    <!-- AddThis Smart Layers END -->

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
  <body class="contact-us-page">
  <div class="container">

<?php
    require_once('header.php');
    echo print_header('', '', " class='active'");
?>

  <img src="images/Contact-Us-side-arrow-chalk.png" class="contact-us">
  <div class="row contact-forms">
  <div class="col-md-6">
  <iframe src="https://docs.google.com/forms/d/1S_sMYXiO7mN2vM9EkWZy5caZju2TiHIEZ_vhBYYSFjw/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
  </div>
  <div class="col-md-6" style="color: white">
    <h4>Mailing Address</h4>
    <p>
      Friends of the Bowl Foundation Inc.<br>
      1624 - 33rd Street West<br>
      PO Box 30032 Westview<br>
      Saskatoon SK S7I 0X3
    </p>
  </div>
  </div>

</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
