(function() {
  jQuery(function($) {
    $('.carousel').slick({
      infinite: true,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      speed: 1000,
      autoplaySpeed: 8000
    });
    $('#calendar').fullCalendar({
      googleCalendarApiKey: 'AIzaSyCKpdEmBFNJBWEwuz-Q2noPv4cz2b9W7Us',
      events: {
        googleCalendarId: 'khcc7lu2ap7akodj1gbh32k63o@group.calendar.google.com'
      },
      eventClick: function(calEvent, jsEvent, view) {
        return false;
      }
    });
    return this;
  });

}).call(this);
