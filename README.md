BootyCal
========

BootyCal is a single PHP class (5.1 or higher) to quickly and elegantly output calendars with individual days linked/highlighted. The markup for the calendar is very simple and easy to customize using CSS and possibly Javascript.

Usage
-----

Make sure you include the library

```php
<?php
include_once('BootyCal.php');
```

Include the provided CSS:

```html
<link href="css/booty.css" rel="stylesheet" type="text/css" media="all">
```
or enroll your own.

Display a calendar for the current month
```php
<?php
echo BootyCal::make()->render();
```

alternatively using the constructor:

```php
<?php
$cal = new BootyCal();
echo $cal->render();
```

selecting month or range:

```php
<?php
// Pick specific month
echo BootyCal::make()->month(7)->render();

// Pick specific year, month
echo BootyCal::make()->month(12, 2013)->render();

// Pick a range displaying multiple calendars
echo BootyCal::make()->from(11, 2012)->to(12, 2013)->render();

// Divide multiple months using custom divider-markup
echo BootyCal::make()->from(11, 2012)->to(12, 2013)->divider('<hr>')->render();

```

Add link/highlight days:

```php
<?php
// Would display calendar for December month with day 24 linked to #hohoho
echo BootyCal::make()->link(24, 12, 2012, '#hohoho')->render();

// Would display calendars for October, November and December linking Halloween and Christmas
echo BootyCal::make()
		->link(24, 12, 2012, '#hohoho')
		->link(31, 10, 2012, '#trickortreat')
		->render();

// Would only show December not displaying the second link being out of range
echo BootyCal::make()
		->month(12, 2012)
		->link(24, 12, 2012, '#hohoho')
		->link(31, 10, 2012, '#trickortreat')
		->render();
```

Alternative labels / translations:

```php
<?php
// Setup a new calendar for december and
$cal = new BootyCal()->month(12);

// rename all the days of the week in one go
$cal->day_names(array('Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa', 'So'));

// rename all the months in one go
$cal->month_names(array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni','Juli','August','September','Oktober','November','Dezember'));

// Or just rename some individual months or days of the week
$cal->december('Christmas');
$cal->sunday('Zzz');

// Output as normal
echo $cal->render();
```

Alternative setup using an object:

```php
<?php
// Renders march, april in German separated with hr with one day linked in each month
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
		'Dezember'
	),
	'links' => array(
		array(15, 3, 2012, '#party'),
		array(20, 4, 2012, '#concert')
	),
	'separator' => '<hr>'
))->render();
```
 
Simpe jQuery implementation example:
 
```javascript
// When a linked day is clicked, alert information about that day
$(document).ready(function(){
	$('#my_calendar a').click(function(e) {
		// Get all available attribute values
		var id = $(this).attr('id');
		var href = $(this).attr('href');
		var day = $(this).attr('data-day');
		var month = $(this).attr('data-month');
		var year = $(this).attr('data-year');
		var month_name = $(this).attr('data-month-name');
		var day_name = $(this).attr('data-day-name');

		// Alert all values
		alert(
			'Id: ' + id + '\n' +
			'Href: ' + href + '\n' +
			'Day: ' + day + '\n' +
			'Month: ' + month +'\n' +
			'Year: ' + year + '\n' +
			'Month name: ' + month_name + '\n' +
			'Day name: ' + day_name
		);
		
		// prevent the link from firing
		return false;
	});
});
```

Output well-formatted HTML source code for review

```php
<?php
// Outputs source for calendar with Christmas Eve linked to #hohoho
echo BootyCal::make()->link(24, 12, 2012, '#hohoho')->render_source();
```