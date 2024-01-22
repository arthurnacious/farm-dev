const events = ['mousemove', 'touchmove']

$.each(events, function(k,v) {
  $('#TimeRange').on(v, function() {
    $('#TimeText').text($('#TimeRange').val());
  });
})