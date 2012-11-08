$(document).ready(function(){
  $('.bootycal a').click(function(e) {
    // Alert all available attribute values
    alert(
      'Id: '          + $(this).attr('id')              + '\n' +
      'Href: '        + $(this).attr('href')            + '\n' +
      'Day: '         + $(this).attr('data-day')        + '\n' +
      'Month: '       + $(this).attr('data-month')      + '\n' +
      'Year: '        + $(this).attr('data-year')       + '\n' +
      'Month name: '  + $(this).attr('data-month-name') + '\n' +
      'Day name: '    + $(this).attr('data-day-name')
    );
    
    return false;
  });
});