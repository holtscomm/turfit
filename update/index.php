<?php
define('IN_BLOG', true);
define('PATH', '');
include('includes/miniblog.php');
require_once('../header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>miniblog</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/custom.css" rel="stylesheet" media="screen">

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
   <?=print_header('','','', " class='active'")?>

	<div class="page-header">
	    <h1>Campaign Updates</h1>
	</div>
	<?=
	    $miniblog_posts;
	?>
	
	<div class="navigation">
		<?php if(!$single) { ?>
			<?php if($miniblog_previous) {	?> <p class="previous-link"><?=$miniblog_previous?></p>	<?php } ?>
			<?php if($miniblog_next) {	?>	<p class="next-link"><?=$miniblog_next?></p> <?php } ?>
		<?php } ?>
		<?php if($single) { ?>
			<p class="previous-link"><a href="<?=$config['miniblog-filename']?>">&laquo; return to posts</a></p>
		<?php } ?>
		<div class="clear"></div>
	</div>
	<div class="footer">
		<!-- a link back is REQUIRED under the terms of the license. To remove the link back see http://www.spyka.net/licensing -->
        <!-- Admin note: I tried, I swear I did. "License purchases are currently disabled." 
                Maybe some day we will get a license! -->
	</div>
</div>
</body>
</html>