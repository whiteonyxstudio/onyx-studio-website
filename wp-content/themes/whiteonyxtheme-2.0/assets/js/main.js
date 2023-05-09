$(document).ready(function() {
  $.ajax({
    url: 'http://worldtimeapi.org/api/timezone/Europe/London',
    dataType: 'json',
    success: function(data) {
      var londonTime = new Date(data.datetime);
      $('#london-time').text( londonTime.toLocaleTimeString());
    }
  });
});


$('.testemonials-slider').slick({
  dots: true,
  infinite: false,
  arrows:true,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow:'<div class="testemonials-arrow-wrapper slick-arrow slick-prev"><svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM36 7H1V9H36V7Z" fill="black"/></svg></div>',
  nextArrow:'<div class="testemonials-arrow-wrapper slick-arrow slick-next"><svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M35.7071 8.70711C36.0976 8.31658 36.0976 7.68342 35.7071 7.29289L29.3431 0.928932C28.9526 0.538408 28.3195 0.538408 27.9289 0.928932C27.5384 1.31946 27.5384 1.95262 27.9289 2.34315L33.5858 8L27.9289 13.6569C27.5384 14.0474 27.5384 14.6805 27.9289 15.0711C28.3195 15.4616 28.9526 15.4616 29.3431 15.0711L35.7071 8.70711ZM0 9H35V7H0V9Z" fill="black"/></svg></div>'
});