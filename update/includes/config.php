<?php
if(!defined('IN_BLOG'))
{
	exit;
}

$sqlconfig = array();
if(strstr($_SERVER["SERVER_NAME"], 'localhost'))
{
    $sqlconfig['username'] = 'root'; // database username
    $sqlconfig['password'] = 'rootroot'; // database password
    $sqlconfig['host'] = '127.0.0.1'; // database host (usually localhost)
    $sqlconfig['dbname'] = 'miniblog'; // database name
}
else if(strstr($_SERVER["SERVER_NAME"], 'turfit.ca'))
{
    $sqlconfig['username'] = 'turfit_miniblog'; // database username
    $sqlconfig['password'] = '1super!mini@'; // database password
    $sqlconfig['host'] = 'mysql1006.blacksun.ca'; // database host (usually localhost)
    $sqlconfig['dbname'] = 'turfit_miniblog'; // database name
}

?>