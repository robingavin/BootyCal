<?php
/**
* 
*/

class BootyCal {
	private $start_year;
	private $start_month;
	private $end_year;
	private $end_month;
	private $separator;
	private $day_names;
	private $month_names;
	private $links;
	private $id;
	private $class_name;
	private $auto_mode;

	public function __construct($properties = array()) {
		// Default values
		$this->start_year = null;
		$this->end_year = null;
		$this->start_month = null;
		$this->end_month = null;
		$this->separator = '';
		$this->class_name = 'booty';
		$this->id = '';
		$this->links = array();
		$this->auto_mode = true;

		// Standard translation/strings
		$this->day_names = array('Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su');
		$this->month_names = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		
		// Methods piped through __call
		$dynamic_methods = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december');

		foreach($properties as $property => $value) {
			if(in_array($property, $dynamic_methods) || method_exists($this, $property)) {
				$value = is_array($value) ? $value : array($value);
				
				if(in_array($property, array('day_names', 'month_names'))) {
					$value = array($value);
				}

				if(count($value) >= 3) {
					$this->$property($value[0], $value[1], $value[2]);
				} else if(count($value) == 2) {
					$this->$property($value[0], $value[1]);
				} else {
					$this->$property($value[0]);
				}
			} else if($property == 'links') {
				foreach($value as $link) {
					$this->link($link[0], $link[1], $link[2], $link[3]);
				}
			} else {
				echo $property;
			}
		}
	}

	public function __call($method, $parameters) {
		// This method accepts the following dynamic calls
		// monday-sunday, january-december
		
		// Create an array with 0 => sunday, 1 => monday, etc
		$weekdays_and_keys = array_flip(array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'));
		
		// Create an array with 0 => january, 1 => february, etc
		$months_and_keys = array_flip(array('january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'));

		if(array_key_exists($method, $weekdays_and_keys)) {
			$day_name_key = $weekdays_and_keys[$method];
			$this->day_names[$day_name_key] = $parameters[0];
		} else if(array_key_exists($method, $months_and_keys)) {
			$month_name_key = $months_and_keys[$method];
			$this->month_names[$month_name_key] = $parameters[0];
		} else {
			throw new Exception($method . " is not valid method", 1);
		}
		
		return $this;
	}

	public static function make($properties = array()) {
		return new self($properties);
	}

	public function month($month = null, $year = null) {
		$this->auto_mode = false;

		$month = is_null($month) ? date('m') : $month;
		$year = is_null($year) ? date('Y') : $year;

		$this->start_year = $year;
		$this->end_year = $year;
		
		$this->start_month = $month;
		$this->end_month = $month;
		
		return $this;
	}

	public function from($month, $year) {
		$this->auto_mode = false;

		$this->start_year = $year;
		$this->start_month = $month;
		
		return $this;
	}

	public function to($month, $year) {
		$this->auto_mode = false;

		$this->end_year = $year;
		$this->end_month = $month;
		
		return $this;
	}

	public function separator($separator) {
		$this->separator = $separator;
		
		return $this;
	}

	public function link($day = null, $month = null, $year = null, $href = '#') {
		if($this->auto_mode) {
			if(is_null($this->start_year) || $year < $this->start_year)
				$this->start_year = $year;

			if(is_null($this->end_year) || $year > $this->end_year)
				$this->end_year = $year;

			if(is_null($this->start_month) || $month < $this->start_month)
				$this->start_month = $month;

			if(is_null($this->end_month) || $month > $this->end_month)
				$this->end_month = $month;
		}

		$day = is_null($day) ? date('d') : $day;
		$month = is_null($month) ? date('n') : $month;
		$year = is_null($year) ? date('Y') : $year;
		
		// Ensure dimension for year
		if(!array_key_exists($year, $this->links))
			$this->links[$year] = array();

		// Ensure dimension for month
		if(!array_key_exists($month, $this->links[$year]))
			$this->links[$year][$month] = array();

		$this->links[$year][$month][$day] = $href;

		return $this;
	}
	
	public function day_names($day_names) {
		if (!is_array($day_names) || count($day_names) != 7) {
	        throw new Exception('day_names only accepts an array with 7 values and the provided array has ' . count($day_names));
	    }

		$this->day_names = $day_names;
		return $this;
	}

	public function month_names($month_names) {
		if (!is_array($month_names) || count($month_names) != 12) {
	        throw new Exception('month_names only accepts an array with 12 values');
	    }

		$this->month_names = $month_names;
		return $this;
	}

	public function id($id) {
		$this->id = $id;

		return $this;
	}
	
	public function class_name($class_name) {
		$this->class_name = $class_name;

		return $this;
	}

	public function render($show_source = false) {
		$calendars = array();

		if(is_null($this->start_year))
			$this->start_year = date('Y');

		if(is_null($this->end_year))
			$this->end_year = date('Y');

		if(is_null($this->start_month))
			$this->start_month = date('n');

		if(is_null($this->end_month))
			$this->end_month = date('n');

		for ($month = $this->start_month, $year = $this->start_year;; $month++) { 
			if($month > 12) {
				$month = 1;
				++$year;
			}

			if($month > $this->end_month || $year > $this->end_year) {
				break;
			}
			
			$calendars[] = $this::calendar_for_month($month, $year);
		}

		$all_calendars = implode($this->separator, $calendars);

		return $show_source ? '<pre><code>' . htmlspecialchars($all_calendars) . '<code></pre>' : $all_calendars;
	}

	public function render_source() {
		return str_replace("	", "  ", $this->render(true));
	}

	// Private methods

	private function calendar_for_month($month, $year) {
		// Get the name of the month for the caption
		$month_name = $this->month_names[$month-1];
		
		// Get the week day number (0:mon, 6:sun)
		$running_day = date('N',mktime(0,0,0,$month,1,$year)) - 1;
		
		// Get number of days in month (28-31)
		$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
		
		// Start values
		$week_days_counter = 0;
		$week_days_counter = 0;
		$day_counter = 0;
		
		// Start the table with appropriate attributes
		$calendar_attributes = array('class' => $this->class_name, 'id' => $this->id);
		$calendar = self::tag('table', null, $calendar_attributes) . "\n";
		
		// Add the caption
		$calendar .= "	<caption>$month_name $year</caption>\n";

		// Create the heading and add it to the table
		$calendar .= $this::weekday_heading();
		
		// Start the first row
		$calendar .= "	<tr>\n";

		// If the month doesn't start on the first day, fill out with empty cells 
		for($i = 0; $i < $running_day; $i++){
			$calendar .= "		<td></td>\n";
			$week_days_counter++;
		}
		
		for($list_day = 1; $list_day <= $days_in_month; $list_day++) {
			$calendar;

			// Check if there is a link attached to that day
			$is_linked = array_key_exists($year, $this->links) && array_key_exists($month, $this->links[$year]) && array_key_exists($list_day, $this->links[$year][$month]);
			
			// Create td with a link or a td with a div
			if($is_linked) {
				$link_attributes = array(
					'href' => $this->links[$year][$month][$list_day], 
					'id' => "day-$year-$month-$list_day",
					'data-year' => $year,
					'data-month' => $month,
					'data-day' => $list_day,
					'data-day-name' => $this->day_names[$week_days_counter],
					'data-month-name' => $this->month_names[$month-1],
				);
				$calendar .= "		" . self::tag('td', self::tag('a', $list_day, $link_attributes)) . "\n";
			} else {
				$calendar .= "		" . self::tag('td', $list_day) . "\n";
			}

			// Last day of the week
			if($running_day == 6 ) {
				// End the week-row
				$calendar .= "	</tr>\n";
				
				// If there are more days, start a new week
				if(($day_counter + 1) != $days_in_month) {
					$calendar .= "	<tr>\n";
				}
				
				// Reset week specific counter values
				$running_day = 0;
				$week_days_counter = 0;
			} else {
				$week_days_counter++;
				$running_day++;
			}
			
			$day_counter++;
		};
		
		// Print empty cells for the rest of the week to create full week
		if($week_days_counter < 7){
			$days_left_to_print = (7 - $week_days_counter);
			for($i = 1; $i <= $days_left_to_print; $i++){
				$calendar .= "		<td></td>\n";
			};
		};
		
		// End the last row and the table
		$calendar .= "	</tr>\n</table>";
		
		return $calendar;
	}
	
	private function weekday_heading() {
		// Start the row
		$heading = "	<tr>\n";

		// Implode the headers in to td-elements
		$heading .= '		<th>' . implode("</th>\n		<th>",$this->day_names) . "</th>\n";
		
		// Wrap up the row
		$heading .= "	</tr>\n";
		
		return $heading;
	}

	public static function tag($tag, $value = null, $attributes = array()) {
		// Remove empty parameters
		$attributes = array_filter($attributes, function($attribute) { return strlen($attribute) > 0; });
		
		$attribute_string = '';
		foreach($attributes as $attr_key => $attr_value) {
			$attribute_string .= " $attr_key=\"$attr_value\"";
		}
		
		$output = "<{$tag}{$attribute_string}>";
		
		if(!is_null($value)) {
			$output .= "$value</$tag>";
		}
		
		return $output;
	}
}
?>