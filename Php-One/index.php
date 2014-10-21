<?php
require_once('bin/System.php');
require_once('bin/System.Route.php');
require_once('bin/System.View.php');

if (isset($_GET['controller']) && isset($_GET['action']))
{
	$route = new Route($_GET['controller'], $_GET['action']);
}
else if (isset($_GET['controller']))
{
	$route = new Route($_GET['controller'], null);
}
else
{
	$route = new Route('home', 'index');
}
?>