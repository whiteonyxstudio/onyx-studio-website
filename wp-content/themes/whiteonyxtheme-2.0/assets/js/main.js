// $(document).ready(function() {
//   $.ajax({
//     url: 'http://worldtimeapi.org/api/timezone/Europe/London',
//     dataType: 'json',
//     success: function(data) {
//       var londonTime = new Date(data.datetime);
//       $('#london-time').text( londonTime.toLocaleTimeString());
//     }
//   });
// });

// $(document).ready(function() {
//   $.ajax({
//     url: 'http://worldtimeapi.org/api/timezone/Europe/Lviv',
//     dataType: 'json',
//     success: function(data) {
//       var londonTime = new Date(data.datetime);
//       $('#lviv-time').text( londonTime.toLocaleTimeString());
//     }
//   });
// });


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


$('.sample-projects-slider').slick({
  dots: true,
  infinite: true,
  arrows:true,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow:'<svg class=" slick-arrow slick-prev" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.248138 25C0.248138 38.6694 11.3132 49.75 24.962 49.75C38.6107 49.75 49.6758 38.6694 49.6758 25C49.6758 11.3306 38.6107 0.25 24.962 0.25C11.3132 0.25 0.248138 11.3306 0.248138 25Z" fill="black" stroke="black" stroke-width="0.5"/><path d="M27.957 16L19.9686 24.5L27.957 33" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
  nextArrow:'<svg class=" slick-arrow slick-next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M49.7519 25C49.7519 38.6694 38.6868 49.75 25.038 49.75C11.3893 49.75 0.324219 38.6694 0.324219 25C0.324219 11.3306 11.3893 0.25 25.038 0.25C38.6868 0.25 49.7519 11.3306 49.7519 25Z" fill="black" stroke="black" stroke-width="0.5"/><path d="M22.043 16L30.0314 24.5L22.043 33" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>'
});


$(document).ready(function() {
  $('input[type="radio"] + label').each(function() {
    $(this).add($(this).prev('input[type="radio"]')).wrapAll('<div class="radio-buttons-item"></div>');
  });
});

$(document).ready(function() {
  $('.radio-buttons .wpcf7-list-item-label ').click(function() {
    $(this).prev('input[type="radio"]').prop('checked', true);
  });
});

// $(document).ready(function() {
//   $('.pill-container .wpcf7-list-item-label ').click(function() {
//     $(this).prev('input[type="checkbox"]').prop('checked', true);
//   });
// });


$(document).ready(function() {
  var logoBlock = $(' .testemonials-slider-item.logo');
  var clientDiv = $(' .testemonials-slider-item.client');
  
  clientDiv.append(logoBlock);
});