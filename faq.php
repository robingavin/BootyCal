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
  <script src="js/bootstrap.min.js"></script>
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
            <li><a href="examples.php">Examples</a></li>
            <li><a href="docs.php">Docs</a></li>
            <li class="active"><a href="faq.php">Faq</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h3>Faq</h3>
    <hr>
    <div class="row">
      <div class="span6 question">Why do you have a factory, <em>make()</em>, method when you might as well use the contructor <em>new BootyCal()</em>?</div>
      <div class="span6 answer">Because it enables you to chain the construction, configuration process as well as output on one pretty line in case you want to use it right in your view/template without messing up the markup. Remember, using make() to create calendar instances is completely optional.</div>
    </div>
    <hr>
    <div class="row">
      <div class="span6 question">What license is BootyCal licensed under?</div>
      <div class="span6 answer">Creative Commons Attribution 3.0 which means you can basically do whatever you want with it.</div>
    </div>
    <hr>
    <div class="row">
      <div class="span6 question">Why are you not using a namespace for BootyCal, that's really unprofessional?</div>
      <div class="span6 answer">Because it's just one single class and the namespacing in PHP is plain out ugly. It shouldn't be to much work to put it in a namespace if that's what you want.</div>
    </div>
    <hr>
    <div class="row">
      <div class="span6 question">Why are you using the word <em>Booty</em> in the name, isn't that a little offensive?</div>
      <div class="span6 answer">Yeah…well that's just…you know…your opinion man.</div>
    </div>
    <hr>
    <div class="row">
      <div class="span6 question"></div>
      <div class="span6 answer"></div>
    </div>    
    <div class="row-fluid" id="footer"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a> <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">BootyCal</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.jaij.net" property="cc:attributionName" rel="cc:attributionURL">Robin Gavin</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US">Creative Commons Attribution 3.0 Unported License</a>.</div>
  </div> <!-- /container -->
</body>
</html>