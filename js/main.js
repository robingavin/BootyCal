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
		
		return false;
	});
});