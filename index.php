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

    <div class="row">
        <div class="col-md-4">
            <img src="images/fieldgoalcampaignlogo.jpeg" width="100%">
        </div>
        <div class="col-md-8">
            <div id="carousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                <a href="pregame.php#greg">
                  <img src="images/gregyuel.jpg" alt="Greggy boy">
                  <div class="carousel-caption">
                    Greg Yuel, click to read more about him!
                  </div>
                </a>
                </div>
                <div class="item">
                  <img src="images/mudbath.jpg" alt="Muddy">
                  <div class="carousel-caption">
                      Always be mudding
                  </div>
                </div>
              </div>
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h2>Donations to date</h2>
            <img src="images/numbers/0.png" style="width:auto; height: 100px">
            <img src="images/numbers/1.png" style="width:auto; height: 100px">
            <img src="images/numbers/0.png" style="width:auto; height: 100px">
            <img src="images/numbers/0.png" style="width:auto; height: 100px">
            <img src="images/numbers/1.png" style="width:auto; height: 100px">
            <img src="images/numbers/0.png" style="width:auto; height: 100px">
            <img src="images/numbers/1.png" style="width:auto; height: 100px">
            <img src="images/numbers/1.png" style="width:auto; height: 100px">
        </div>
        <div class="col-md-4">
            <a target="_blank" href="https://secure.e2rm.com/registrant/startup.aspx?eid=127859">
                <img src="images/footballdonate.png" style="width:100%">
            </a>        
        </div>
    </div>
    

  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
       $("#carousel").carousel({
            interval: 20000
       });
    </script>
  </body>
</html>
