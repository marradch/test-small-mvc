
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo empty($page) ? 'Tractive Pets' : $page->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/offcanvas.css" rel="stylesheet">
  
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Tractive Pets</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo empty($page) ? 'active' : ''; ?>"><a href="/">Home</a></li>
            <li class="<?php echo (!empty($page) && $page->friendly == 'real-time-gps-live-tracking') ? 'active':''; ?>"><a href="/real-time-gps-live-tracking">Real-Time Tracking</a></li>
			<li class="<?php echo (!empty($page) && $page->friendly == 'subscription-plan') ? 'active':''; ?>"><a href="/subscription-plan">Subscription Plan</a></li>
			<li class="<?php echo (!empty($page) && $page->friendly == 'health-dog-dementia') ? 'active':''; ?>"><a href="/health-dog-dementia">dog dementia</a></li>
			<li class="<?php echo (!empty($page) && $page->friendly == 'good-to-know-dog-in-heat') ? 'active':''; ?>"><a href="/good-to-know-dog-in-heat">dog in heat</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <?php
	  include("views\\".static::$name."\\".$templateName.'.php');
	  ?>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
