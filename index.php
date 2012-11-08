<?php
include_once('lib/BootyCal.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BootyCal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/bootycal.css">
  <link rel="stylesheet" href="css/page.css">

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
            <li><a href="docs.php">Docs</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h2>Calendars made easy</h2>
    <p>BootyCal is a simple PHP tool for outputting calendars including the possibility of anchor/link dates.</p>

    <h3>Simple example</h3>
    <div class="row">
      <div class="span7">
        <script src="https://gist.github.com/4038708.js?file=gistfile1.php"></script>
        <p>An optional extra step is to include the provided styles</p>
        <script src="https://gist.github.com/4040701.js?file=gistfile1.html"></script>
      </div>
      <div class="span1 well" style="width: 10px">=&gt;<br><br>=&gt;<br><br>R<br>E<br>S<br>U<br>L<br>T<br><br>=&gt;<br><br>=&gt;</div>
      <div class="span4">
        <?php
        echo BootyCal::make()                      // Create
                     ->month(12, 2012)             // Set month
                     ->link(25, 12, 2012, '#hoho') // Link
                     ->link(31, 12, 2012, '#party')// Link
                     ->render();                   // Render
        ?>
      </div>
    </div>

    <div class="row"><hr></div>

    </div> <!-- /container -->
</body>
</html>