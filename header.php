<?php

/**
 * Function: print_header
 * Parameter(s):
 *    $active_tab - which tab will have the 'active' designation in the header nav bar
 */
function print_header($donor_active="", $testimonials_active="", $contact_active="", $update_active="")
{
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

    return '
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="'.$wwwroot.'">Home</a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Case for Support<b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href="'.$wwwroot.'pregame.php">Pre Game</a></li>
          <li><a href="'.$wwwroot.'gameplan.php">Game Plan</a></li>
          <li><a href="'.$wwwroot.'layout.php">Facility Layout</a></li>
          <li><a href="'.$wwwroot.'firsthalf.php">First Half</a></li>
          <li><a href="'.$wwwroot.'timeout.php">Time Out</a></li>
          <li><a href="'.$wwwroot.'secondhalf.php">Second Half</a></li>
          <li><a href="'.$wwwroot.'postgame.php">Post Game Stats</a></li>
          </ul>
      </li>
      <li'. $update_active .'><a href="'.$wwwroot.'update/">News</a></li>
      <li'. $contact_active .'><a href="'.$wwwroot.'contact.php">Contact Us</a></li>
      <li><a target="_blank" href="https://secure.e2rm.com/registrant/startup.aspx?eid=127859">Donate Now!</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>';
}
