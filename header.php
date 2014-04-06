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
          <a href="'.$wwwroot.'fullpage.html" class="dropdown-toggle" data-toggle="dropdown">Case for Support<b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href="'.$wwwroot.'fullpage.html#pregame">Pre Game</a></li>
          <li><a href="'.$wwwroot.'fullpage.html#gameplan">Game Plan</a></li>
          <li><a href="'.$wwwroot.'fullpage.html#layout">Facility Layout</a></li>
          <li><a href="'.$wwwroot.'fullpage.html#firsthalf">First Half</a></li>
          <li><a href="'.$wwwroot.'fullpage.html#timeout">Time Out</a></li>
          <li><a href="'.$wwwroot.'fullpage.html#secondhalf">Second Half</a></li>
          <li><a href="'.$wwwroot.'fullpage.html#postgame">Post Game Stats</a></li>
          </ul>
      </li>
      <li'. $update_active .'><a href="'.$wwwroot.'update/">Updates</a></li>
      <li'. $donor_active .'><a href="'.$wwwroot.'donors.php">Donor Recognition</a></li>
      <li'. $testimonials_active .'><a href="'.$wwwroot.'testimonials.php">Testimonials</a></li>
      <li'. $contact_active .'><a href="'.$wwwroot.'contact.php">Contact Us</a></li>
      <li><a target="_blank" href="https://secure.e2rm.com/registrant/startup.aspx?eid=127859">Donate Now!</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>';
}
