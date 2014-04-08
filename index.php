<?php
define('IN_BLOG', true);
define('PATH', 'update/');
require_once(PATH . 'includes/miniblog.php');
require_once('header.php');

// Get the current donations figure
$sql = "SELECT config_value FROM miniblog_config WHERE config_name = 'donations-to-date'";
$result = mysql_query($sql);
$donations = 0;
if(mysql_num_rows($result) > 0)
{
    while($config_value = mysql_fetch_assoc($result))
    {
        $donations = $config_value['config_value'];
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Let's Turfit!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta property="og:title" content="Let's Turfit - The Bowl Field Goal Campaign" />
    <meta property="og:image" content="<?= $wwwroot ?>images/fieldgoalcolor.png" /> 
    <meta property="og:description" content="Home page for The Bowl Field Goal Campaign!" />
    <meta property="og:url" content="http://<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">

    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <!--<script src="js/html5shiv.js"></script>-->
      <!--<script src="js/respond.min.js"></script>-->
    <![endif]-->

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
        },   
        'recommended' : {} 
      });
    </script>
    <!-- AddThis Smart Layers END -->

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
  <?=
    print_header('');
  ?>

    <div class="row">
        <div class="col-md-4">
            <img src="images/fieldgoalcolor.png" width="290px" height="217px" class="field-goal-home">
        </div>
        <div class="col-md-8">
            <div id="carousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                <a href="http://localhost:8080/turfit/update/?post=bacon-ipsum">
                    <img src="images/scoreboard.jpg" alt="Scoreboards and such">
                </a>
                </div>
                <div class="item ">
                    <a href="pregame.php#greg">
                      <img src="images/gregyuel.jpg" alt="Greg Yuel">
                    </a>
                </div>
                <div class="item">
                  <img src="images/clipboard.jpg" alt="Clippy">
                  <div class="carousel-caption">
                      Cliptastic
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
            <div class="donation-box">
                <h2 class="text-center">Donations</h2>
                <div id="donations">
                </div>
            </div>
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
        var calculate_donations = function(donations) {
            var DIGITS = 8;
            var donationString = parseInt(donations) + "";
            var donationArray = donationString.split("");
            var paddingArray = new Array();
            var digitsToPad = DIGITS - donationArray.length;
            for(var i = 0; i < digitsToPad; i++) {
                paddingArray[i] = 0;
            }
            var printArray = paddingArray.concat(donationArray);
            
            var htmlContent = "";
            for(var i = 0; i < DIGITS; i++) {
                htmlContent += "<img class='donation-number' src='images/numbers/" + printArray[i] + ".jpg'>";
            }
            $("#donations").html(htmlContent);
        };
    
       $(document).ready(function(){
           $("#carousel").carousel({
                interval: 20000
           });
           calculate_donations(<?=$donations?>);
       });
    </script>
  </body>
</html>
