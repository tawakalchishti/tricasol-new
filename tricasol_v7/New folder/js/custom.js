$(document).ready(function(e) {
$('.navbar-toggler').on('click', function(e) {
$('body').toggleClass('nav-open');
e.stopPropagation();
});


$(".nav-link.dropdown-toggle").click(function(){
  $("#header").toggleClass("arrow-item");
});
});

$(document).click(function(e) {
$('body').removeClass('nav-open');
});


// On Scroll add class 
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 150) {
        $("body").addClass("darkHeader");
    }
    if (scroll <= 50) {
        $("body").removeClass("darkHeader");
    }
});



// testimonial slider

$(".market-icon").click(function(e) {
    var select = $(this).find("strong").text();
	$(".market-icon").removeClass("active");
	$(this).addClass("active");
	$(".marketing-content").hide();
	$(".marketing-content."+select).show();
});

$('.market-slider').slick({
  vertical: true,
  verticalSwiping: true,
  slidesToShow: 2,
  slidesToScroll: 1
});



// center moder slider

$('.testmonioals-slider-block .testmonioals-slider').
on('init', () => {
}).
slick({
  centerMode: true,
  centerPadding: 0,
  infinite: true,
  slidesToShow: 1,
  focusOnSelect: true,
mobileFirst:true,
responsive: [
{
breakpoint: 767.98,
settings: {
slidesToShow: 2
}
},
{
breakpoint: 991.98,
settings: {
  arrows: true,
slidesToShow: 3,
dots: true
}
},
{
breakpoint: 1199.98,
settings: {
  arrows: true,
slidesToShow: 4,
dots: true
}
}],
  asNavFor: '.testmonioals-slider-block .customer-info-slider'}).
on('beforeChange', (event, slick, current, next) => {
});
 $('.testmonioals-slider-block .customer-info-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade:true,
  focusOnSelect: true,
  asNavFor: '.testmonioals-slider-block .testmonioals-slider'
});



 // Host slider

 $('.host-slider-block .host-slider').
on('init', () => {
}).
slick({
  centerMode: true,
  centerPadding: 0,
  infinite: true,
  slidesToShow: 1,
  focusOnSelect: true,
mobileFirst:true,
responsive: [
{
breakpoint: 767.98,
settings: {
slidesToShow: 2
}
},
{
breakpoint: 991.98,
settings: {
  arrows: true,
slidesToShow: 3,
dots: true
}
},
{
breakpoint: 1199.98,
settings: {
  arrows: true,
slidesToShow: 3,
dots: true
}
}],
  asNavFor: '.host-slider-block .host-info-slider'}).
on('beforeChange', (event, slick, current, next) => {
});
 $('.host-slider-block .host-info-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade:true,
  asNavFor: '.host-slider-block .host-slider'
});

$(document).ready(function () {
	
	$('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) { 
		$('.slick-slider').slick('setPosition'); 
	});
	
	$('#nav li').on('click', function(){
    $(this).toggleClass('active');
    $(this).siblings().removeClass('active');
});
});