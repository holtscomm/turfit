<?php

$wwwroot = "/";
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

/**
 * Function: print_header
 * Parameter(s):
 *    $active_tab - which tab will have the 'active' designation in the header nav bar
 */
function print_header($donor_active="", $testimonials_active="", $contact_active="", $update_active="")
{
    $wwwroot = "/";
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

    return '
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="'.$wwwroot.'"><img src="'.$wwwroot.'images/turfit-pennant.png" height="40px" style="margin:-10px"></a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="'.$wwwroot.'fullpage.php" class="dropdown-toggle" data-toggle="dropdown">Case for Support<b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href="'.$wwwroot.'fullpage.php#pregame">Pre Game</a></li>
          <li><a href="'.$wwwroot.'fullpage.php#gameplan">Game Plan</a></li>
          <li><a href="'.$wwwroot.'fullpage.php#firsthalf">First Half</a></li>
          <li><a href="'.$wwwroot.'fullpage.php#timeout">Time Out</a></li>
          <li><a href="'.$wwwroot.'fullpage.php#secondhalf">Second Half</a></li>
          <li><a href="'.$wwwroot.'fullpage.php#postgame">Post Game Stats</a></li>
          </ul>
      </li>
      <li'. $update_active .'><a href="'.$wwwroot.'update/">News</a></li>
      <li'. $donor_active .'><a href="'.$wwwroot.'donors/">Donor Stories</a></li>
      <li'. $contact_active .'><a href="'.$wwwroot.'contact.php">Contact Us</a></li>
      <li><a target="_blank" href="https://secure.e2rm.com/registrant/startup.aspx?eid=127859">Donate Now!</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div>
</nav>';
}
