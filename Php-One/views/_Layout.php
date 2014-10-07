<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo (isset($GLOBALS['ActivePage']) ? $GLOBALS['ActivePage'] . ' - ' : ''); ?>PHP One Framework</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <link href="content/css/bootstrap.min.css" rel="stylesheet" />
    <link href="content/css/bootstrap-theme.min.css" rel="stylesheet" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="content/css/Styles.css" rel="stylesheet" />
  </head>
  <body>
	<div id="header">
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Php One</a>
                </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav">
				    <li <?= ($GLOBALS['ActivePage'] == "Home" ? 'class="active"' : ''); ?>><a href="?controller=home">Home</a></li>
		            <li <?= ($GLOBALS['ActivePage'] == "About" ? 'class="active"' : ''); ?>><a href="?controller=home&action=about">About</a></li>
                    <li <?= ($GLOBALS['ActivePage'] == "Contact" ? 'class="active"' : ''); ?>><a href="?controller=home&action=contact">Contact</a></li>
                </ul>
            </div>
		  </div>
		</nav>
	</div>
  
	<div id="body">
		<?php require_once($view); ?>
	</div>
	
  </body>
</html>
