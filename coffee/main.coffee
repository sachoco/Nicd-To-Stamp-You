jQuery ($) -> 
	$('.carousel').slick infinite: true, fade: true, cssEase: 'linear', autoplay: true, speed: 1000, autoplaySpeed: 8000
	$('#calendar').fullCalendar 
		googleCalendarApiKey : 'AIzaSyCKpdEmBFNJBWEwuz-Q2noPv4cz2b9W7Us', 
		events: googleCalendarId : 'khcc7lu2ap7akodj1gbh32k63o@group.calendar.google.com'
		eventClick:  (calEvent, jsEvent, view) -> false
	$('nav a').on "click", (e) -> 
		id = $(this).attr "href"
		p = $(id).offset().top
		e.preventDefault()
		$('html,body').animate { scrollTop: p }, 1000
        
	# wrap = $('section#story wrap')
	# bg = $('section#story .background')
	# bg.offset().top = wrap.height()
	@
