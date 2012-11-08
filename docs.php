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
            <li><a href="index.php">About</a></li>
            <li><a href="examples.php">Examples</a></li>
            <li class="active"><a href="docs.php">Docs</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h3>Docs</h3>
    
    <h3>TODO, until then here are some more examples</h3>
    <div class="row">
      <div class="span8">
        <script src="https://gist.github.com/4039774.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
        <?php
        echo BootyCal::make()                      // Create
                     ->month(12, 2012)             // Set month
                     ->link(25, 12, 2012, '#hoho') // Link
                     ->render();                   // Render
        ?>
      </div>
    </div>
  </div> <!-- /container -->
</body>
</html>