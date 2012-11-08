<?php
include_once('lib/BootyCal.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BootyCal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <!--link rel="shortcut icon" href="ico/favicon.ico"> TODO
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png"-->

	<link href="css/main.css" rel="stylesheet" type="text/css" media="all">

	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">BootyCal</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">About</a></li>
              <li><a href="examples.php">Examples</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
	<div class="container">
		<h2>About</h2>
		<p>BootyCal is a simple PHP tool for outputting calendars including the possibility to link individual dates.</p>

		<h3>Simple example</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/4038708.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make()
						->from(11, 2012)
						->to(12, 2012)
						->separator('<hr>')
						->link(22, 11, 2012, '#thanksgivingday')
						->render();
				?>
			</div>
		</div>
    </div> <!-- /container -->
</body>
</html>