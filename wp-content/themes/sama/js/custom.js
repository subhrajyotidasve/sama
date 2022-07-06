
 
  $(document).ready(function() {

	$('.main-slider').owlCarousel({
    loop:true,
	autoplay:true,
	dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});




$('.center').slick({
    dots: false,
    autoplay: true,
    infinite: true,
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});


$('.center2').slick({
    dots: false,
    autoplay: false,
    infinite: true,
  centerMode: true,
  centerPadding: '30px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '15px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '15px',
        slidesToShow: 1
      }
    }
  ]
});


$("video").click(function() {
  //console.log(this); 
  if (this.paused) {
    this.play();
  } else {
    this.pause();
  }
});


  $('.menu li').click(function(){
    $('.menu li.active').removeClass("active");
    $(this).addClass("active");
});

  $('.menu_toggle').click(function(){
    $('.menu_area').addClass('menu_area2');
});
  $('.cls_sidemenu').click(function(){
    $('.menu_area').removeClass('menu_area2');
});

	
// Sticky nav

// jQuery(window).scroll(function() {
//     if (jQuery(this).scrollTop() > 1){  
//         jQuery('.main-header').addClass("sticky");
//     }
//     else{
//         jQuery('.main-header').removeClass("sticky");
//     }
// });


var videos = document.querySelectorAll('video');
for(var i=0; i<videos.length; i++)
   videos[i].addEventListener('play', function(){pauseAll(this)}, true);


function pauseAll(elem){
  for(var i=0; i<videos.length; i++){
    //Is this the one we want to play?
    if(videos[i] == elem) continue;
    //Have we already played it && is it already paused?
    if(videos[i].played.length > 0 && !videos[i].paused){
    // Then pause it now
      videos[i].pause();
    }
  }
}


});










