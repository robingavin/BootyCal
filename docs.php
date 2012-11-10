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
            <li class="active"><a href="docs.php">Docs</a></li>
            <li><a href="faq.php">Faq</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h3>Docs</h3>
    <table class="table table-bordered">
      <tr>
        <th>Returns</th>
        <th>Method</th>
        <th>Note</th>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>__constructor([array $settings])</td>
        <td>The static method BootyCal::make([array $settings]) has identical functionality and is good for 'chaining'</td>
      </tr>
      <tr>
        <td colspan="3" class="doc-table-header">Selecting month or month range and linking</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>month($month = date('n') [, $from_year = date('Y')]])</td>
        <td>Used to display a single month and sets what month to display</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>from($from_month = date('n') [, int $from_year = date('Y')])</td>
        <td>Used for displaying multiple months and sets the first month to display</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>to($to_month = date('n') [, int $to_year = date('Y')])</td>
        <td>Used for displaying multiple months and sets the last month to display</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>link([$day = date('d') [, $month = date('n') [, $year = date('Y') [, $href = '#']]]])</td>
        <td>If month(), from() or to() aren't called this method also defines what months to display to include the dates of all links</td>
      </tr>
      <tr>
        <td colspan="3" class="doc-table-header">General configuration</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>separator(string $seperator)</td>
        <td>Markup to separate the months, e.g. &lt;hr&gt;</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>attribute(string $attribute, string $value)</td>
        <td>Sets any attribute on the table</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>class(string $class_name)</td>
        <td>Sets the class-attribute of the table</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>style(string $style)</td>
        <td>Sets the style-attribute</td>
      </tr>
      <tr>
        <td colspan="3" class="doc-table-header">Rendering / Outputting HTML</td>
      </tr>
      <tr>
        <td>string</td>
        <td>render()</td>
        <td>Returns the HTML for the table</td>
      </tr>
      <tr>
        <td>string</td>
        <td>render_source()</td>
        <td>Returns the HTML for the table like render() but escaped to view source in the browser for quick review during development</td>
      </tr>
      <tr>
        <td colspan="3" class="doc-table-header">Configuring names of months and days</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>months(array $month_names)</td>
        <td>Sets the name of the months and the parameter should be an array of month names starting with January.</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>days(array $day_names)</td>
        <td>Sets the name of the days and the parameter should be an array of month names starting with Monday.</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>january(string $name)</td>
        <td>Setting the name for January</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>february(string $name)</td>
        <td>Setting the name for February</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>march(string $name)</td>
        <td>Setting the name for March</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>april(string $name)</td>
        <td>Setting the name for April</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>may(string $name)</td>
        <td>Setting the name for May</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>june(string $name)</td>
        <td>Setting the name for June</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>july(string $name)</td>
        <td>Setting the name for July</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>august(string $name)</td>
        <td>Setting the name for August</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>september(string $name)</td>
        <td>Setting the name for September</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>october(string $name)</td>
        <td>Setting the name for October</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>november(string $name)</td>
        <td>Setting the name for November</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>december(string $name)</td>
        <td>Setting the name for December</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>monday(string $name)</td>
        <td>Setting the name for Monday</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>tuesday(string $name)</td>
        <td>Setting the name for Tuesday</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>wednesday(string $name)</td>
        <td>Setting the name for Wednesday</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>thursday(string $name)</td>
        <td>Setting the name for Thursday</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>friday(string $name)</td>
        <td>Setting the name for Friday</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>saturday(string $name)</td>
        <td>Setting the name for Saturday</td>
      </tr>
      <tr>
        <td>BootyCal</td>
        <td>sunday(string $name)</td>
        <td>Setting the name for Sunday</td>
      </tr>

    </table>

    <h3>Here are some more examples</h3>
    <div class="row">
      <div class="span12">
        <script src="https://gist.github.com/4039774.js?file=gistfile1.php"></script>
      </div>
    </div>
    
    <div class="row-fluid" id="footer"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a> <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">BootyCal</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.jaij.net" property="cc:attributionName" rel="cc:attributionURL">Robin Gavin</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US">Creative Commons Attribution 3.0 Unported License</a>.</div>
  </div> <!-- /container -->
</body>
</html>