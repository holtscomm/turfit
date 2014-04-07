<!DOCTYPE html>
<html>
  <head>
    <title>Let's Turfit!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	

    <script type="text/javascript" src="js/vendor/jquery.fullPage.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">

    <!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <!--<script src="js/html5shiv.js"></script>-->
      <!--<script src="js/respond.min.js"></script>-->
    <![endif]-->
    
    <link href="css/fullpage.css" rel="stylesheet">

    <script type="text/javascript">
		$(document).ready(function() {
			$.fn.fullpage({
                verticalCentered: false,
                anchors: ['pregame', 'gameplan', 'firsthalf', 'timeout', 'secondhalf', 'postgame'],
                menu: "#menu",
                css3: true
			});
		});
	</script>

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
    <?php
    $wwwroot = "";
    // Adjust wwwroot to be the wwwroot for your project. I.E. production would use '/'
    if(strstr($_SERVER["SERVER_NAME"], 'localhost'))
    {
        $wwwroot = "/turfit/";
    }
    else if(strstr($_SERVER["SERVER_NAME"], 'turfit.ca'))
    {
        if(strstr($_SERVER["REQUEST_URI"], '/new/'))
        {
            $wwwroot = "/new/";
        }
    }
    ?>
  </head>
  <body>
  <ul id="menu" class="menu" style="text-align: center">
      <li><a href="<?=$wwwroot?>">Home</a></li>
      <li data-menuanchor="pregame" class="active"><a href="#pregame">Pre Game</a></li>
      <li data-menuanchor="gameplan"><a href="#gameplan">Game Plan</a></li>
      <li data-menuanchor="firsthalf"><a href="#firsthalf">First Half</a></li>
      <li data-menuanchor="timeout"><a href="#timeout">Time Out</a></li>
      <li data-menuanchor="secondhalf"><a href="#secondhalf">Second Half</a></li>
      <li data-menuanchor="postgame"><a href="#postgame">Post Game</a></li>
  </ul>
  
    <div class="section pregame"></div>
    <div class="section gameplan"></div>
    <div class="section firsthalf"></div>
    <div class="section timeout"></div>
    <div class="section secondhalf"></div>
    <div class="section postgame"></div>

  </body>
</html>
