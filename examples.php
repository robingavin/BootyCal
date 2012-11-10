<?php
include_once('BootyCal.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BootyCal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/page.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/bootycal.css">

  <script src="js/jquery.js"></script>
  <script src="js/jquery_example.js"></script>
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
        <a class="brand" href="index.php">BootyCal</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li><a href="index.php">About</a></li>
            <li class="active"><a href="examples.php">Examples</a></li>
            <li><a href="docs.php">Docs</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h2>Examples</h2>
    <h3>Example 1 - Current month</h3>
    <div class="row">
      <div class="span8">
        <script src="https://gist.github.com/3966480.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
        <?php
        echo BootyCal::make()->render();
        ?>
      </div>
    </div>
    <h3>Example 2 - Other month</h3>
    <div class="row">
      <div class="span8">
        <script src="https://gist.github.com/3966482.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
        <?php
        echo BootyCal::make()->month(12)->render();
        ?>
      </div>
    </div>
    
    <h3>Example 3 - Other month and year</h3>
    <div class="row">
      <div class="span8">
        <script src="https://gist.github.com/3968743.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
        <?php
        echo BootyCal::make()->month(12, 2013)->render();
        ?>
      </div>
    </div>

    <h3>Example 4 - Link</h3>
    <div class="row">
      <div class="span8">
        <script src="https://gist.github.com/3966533.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
        <?php
        echo BootyCal::make()
            ->link(24, 12, 2012, '#hohoho')
            ->render();
        ?>
      </div>
      
    </div>
    <h3>Example 5 - Multiple months with custom separator</h3>
    <div class="row">
      <div class="span8">
        <script src="https://gist.github.com/3966513.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
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
      <div class="span8">
        <script src="https://gist.github.com/3966617.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
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
    
    <h3>Example 7 - Simple jQuery example.</h3>
    <div class="row">
      <div class="span8">
        <script src="https://gist.github.com/3968614.js?file=gistfile1.php"></script>
        <script src="https://gist.github.com/3968665.js?file=gistfile1.js"></script>
      </div>
      <div class="span4">
        <?php
        echo BootyCal::make()
            ->link(28, 4, 2013, '#robin')
            ->link(7, 5, 2013, '#reimar')
            ->render();
        ?>
      </div>
    </div>
    
    <h3>Example 8 - Renaming or translating</h3>
    <div class="row">
      <div class="span8">
        <script src="https://gist.github.com/3968710.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
        <?php
        echo BootyCal::make()
            ->month(12)
            ->december('Christmas')
            ->sunday('Zzz')
            ->render();
        ?>
      </div>
    </div>

    <h3>Example 9 - Alternative setup</h3>
    <div class="row">
      <div class="span8">
        <script src="https://gist.github.com/3969230.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
        <?php
        echo BootyCal::make(array(
          'days' => array(
            'Mo',
            'Di',
            'Mi',
            'Do',
            'Fr',
            'Sa',
            'So'
          ),
          'months' => array(
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
            'Dezember'
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
      <div class="span8">
        <script src="https://gist.github.com/3966688.js?file=gistfile1.php"></script>
      </div>
      <div class="span4">
        <?php
        echo BootyCal::make()->link(1)->render_source();
        ?>
      </div>
    </div>

    <div class="row-fluid" id="footer"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a> <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">BootyCal</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.jaij.net" property="cc:attributionName" rel="cc:attributionURL">Robin Gavin</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US">Creative Commons Attribution 3.0 Unported License</a>.</div>
  </div> <!-- /container -->
</body>
</html>