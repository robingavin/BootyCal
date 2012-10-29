BootyCal
========

Generate calendars with PHP

Usage
-----

A quick example displaying calendar for current month:

```php
<?php
echo BootyCal::make()->render();
```

alternatively using constructor:

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

// Pick a range
echo BootyCal::make()->from(11, 2012)->to(12, 2013)->render();

// Divide months with custom divider
echo BootyCal::make()->from(11, 2012)->to(12, 2013)->divider('a')->render();

```

Add link/highlight days:

```php
<?php
// Would display calendar for December month with day 24 linked to #hohoho
echo BootyCal::make()->link(24, 12, 2012, '#hohoho')->render();

// Would display calendars for October and December linking Halloween and Christmas
echo BootyCal::make()
		->link(24, 12, 2012, '#hohoho')
		->link(31, 10, 2012, '#trickortreat')
		->render();

// Would only show december not displaying the second link
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

// rename all the days in one go
$cal->day_names(array( 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa', 'So'));

// rename all the months in one go
$cal->month_names(array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni','Juli','August','September','Oktober','November','December'));

// Or just rename the values that needs 
$cal->december('Christmas');
$cal->sunday('Zzz');

// Output as normal
$cal->render();
```

Alternative setup using an object:

```php
<?php
// Renders march, april in german with day linked in each
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
		array(15, 3, 2012, '#party'),
		array(20, 4, 2012, '#concert')
	),
	'separator' => '<hr>'
))->render();
```
