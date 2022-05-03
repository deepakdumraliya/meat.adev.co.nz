

$(window).scroll(function(){
  var sticky = $('.header'),
      scroll = $(window).scrollTop();

  if (scroll >= 90) sticky.addClass('header-sticky');
  else sticky.removeClass('header-sticky');
});

// $(document).ready(function() {
//   // page is now ready, initialize the calendar...
//   // options and github  - http://fullcalendar.io/

// $('#calendar').fullCalendar({
//     // dayClick: function() {
//     //     alert('a day has been clicked!');
//     // }
// });

// });

