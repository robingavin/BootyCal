<?php
include_once('../BootyCal.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BootyCal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
	/*
	body {
		padding-top: 60px;
	}
	*/
	
	.gist {
		margin-top: 19px;
	}
	
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

	<link rel="stylesheet" href="css/main.css">

	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<!--div class="navbar navbar-inverse navbar-fixed-top">
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
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div-->
	<div class="container">
		<h3>Example 1 - Current month</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3966480.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make()->render();
				?>
			</div>
		</div>
		<h3>Example 2 - Other month</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3966482.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make()->month(12)->render();
				?>
			</div>
		</div>
		
		<h3>Example 3 - Other month and year</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3968743.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make()->month(12, 2013)->render();
				?>
			</div>
		</div>

		<h3>Example 4 - Link</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3966533.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make()
						->month(12, 2012)
						->link(24, 12, 2012, '#hohoho')
						->render();
				?>
			</div>
			
		</div>
		<h3>Example 5 - Multiple months with custom separator</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3966513.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make()
						->from(11, 2012)
						->to(12, 2012)
						->separator('<hr>')
						->render();
				?>
			</div>
		</div>
		
		<h3>Example 6 - Multiple months with multiple links</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3966617.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make()
						->from(11, 2012)
						->to(12, 2012)
						->link(2, 11, 2012, 'http://pastundfuture.de')
						->link(24, 12, 2012, '#hohoho')
						->render();
				?>
			</div>
		</div>
		
		<h3>Example 7 - Automatic months from links + Simple jQuery example.</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3968614.js?file=gistfile1.php"></script>
				<script src="https://gist.github.com/3968665.js?file=gistfile1.js"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make()
						->link(28, 4, 2013, '#robin')
						->link(7, 5, 2013, '#reimar')
						->id('my_calendar')
						->render();
				?>
			</div>
		</div>
		
		<h3>Example 8 - Renaming or translating</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3968710.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				// Setup a new calendar and
				$cal = new BootyCal();
				
				// rename all the days in one go
				$cal->day_names(array( 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa', 'So'));
				
				// rename all the months in one go
				$cal->month_names(array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni','Juli','August','September','Oktober','November','December'));
				
				// Or just rename the values that needs 
				$cal->december('Christmas')
				$cal->sunday('Zzz')
				
				// Output as 
				?>
			</div>
		</div>

		<h3>Example 9 - Alternative setup</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3969230.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make(array(
					'day_names' => array(
						'Mo',
						'Di',
						'Mi',
						'Do',
						'Fr',
						'Sa',
						'So'
					),
					'month_names' => array(
						'Januar', 
						'Februar', 
						'März', 
						'April', 
						'Mai', 
						'Juni',
						'Juli',
						'August',
						'September',
						'Oktober',
						'November',
						'December'
					),
					'links' => array(
						array(5, 3, 2012, '#party'),
						array(10, 4, 2012, '#concert')
					),
					'separator' => '<hr>'
				))->render();
				?>
			</div>
		</div>

		<h3>Example 10 - Outputting source for review</h3>
		<div class="row">
			<div class="span6">
				<script src="https://gist.github.com/3966688.js?file=gistfile1.php"></script>
			</div>
			<div class="span1"></div>
			<div class="span5">
				<?php
				echo BootyCal::make()->link(1)->render_source();
				?>
			</div>
		</div>
    </div> <!-- /container -->
</body>
</html>