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

// Contact Us Tabs

$(".contact-image").click(function(e) {
    var select = $(this).children("img").attr("alt");
  $(".contact-image").removeClass("active");
  $(this).addClass("active");
  $(".contact-info").hide();
  $(".contact-info."+select).show();
});

// About Us Tabs

$(".about-image").click(function(e) {
    var select = $(this).children("img").attr("alt");
  $(".about-image").removeClass("active");
  $(this).addClass("active");
  $(".about-info").hide();
  $(".about-info."+select).show();
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

// Home Search bar upper Text

$('.slidingVertical').slick({
  vertical: true,
  verticalSwiping: true,
  slidesToShow: 1,
  accessibility: false,
  autoplay: true,
  autoplaySpeed: 1500,
  prevArrow: null,
  nextArrow: null,
  adaptiveHeight: true,
});

// Button white Background Animation

// const btn_w = document.querySelector('.bg-white-animation');
// btn_w.onmousemove = function(e){
//   const x = e.pageX - btn_w.offsetLeft;
//   const y = e.pageY - btn_w.offsetTop;

//   btn_w.style.setProperty('--x', x + 'px');
//   btn_w.style.setProperty('--y', y + 'px');
// }

// Button Blue Background Animation

const btn_blue = document.querySelector('.bg-blue-animation, .bg-white-animation');
if(btn_blue != null){
  btn_blue.onmousemove = function(e){
    const x = e.pageX - btn_blue.offsetLeft;
    const y = e.pageY - btn_blue.offsetTop;

    btn_blue.style.setProperty('--x', x + 'px');
    btn_blue.style.setProperty('--y', y + 'px');
  }
}


// Tricasol Clock 

// var canvas = document.getElementById("canvas");
// var ctx = canvas.getContext("2d");
// var radius = canvas.height / 2;
// ctx.translate(radius, radius);
// radius = radius * 0.90
// setInterval(drawClock, 1000);

// function drawClock() {
//   drawFace(ctx, radius);
//   drawNumbers(ctx, radius);
//   drawTime(ctx, radius);
// }

// function drawFace(ctx, radius) {
//   var grad;
//   ctx.beginPath();
//   ctx.arc(0, 0, radius, 0, 2*Math.PI);
//   ctx.fillStyle = '#d9e9fe';
//   ctx.fill();
//   grad = ctx.createRadialGradient(0,0,radius*0.90, 0,0,radius*1.0);
//   grad.addColorStop(0, '#8497b7');
//   grad.addColorStop(0.5, '#d9e9fe');
//   grad.addColorStop(1, '#d9e9fe');
//   ctx.strokeStyle = grad;
//   ctx.lineWidth = radius*0.1;
//   ctx.stroke();
//   ctx.beginPath();
//   ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
//   ctx.fillStyle = '#8497b7';
//   ctx.fill();
// }

// function drawNumbers(ctx, radius) {
//   var ang;
//   var num;
//   ctx.font = radius*0.15 + "px arial";
//   ctx.textBaseline="middle";
//   ctx.textAlign="center";
//   for(num = 1; num < 13; num++){
//     ang = num * Math.PI / 6;
//     ctx.rotate(ang);
//     ctx.translate(0, -radius*0.85);
//     ctx.rotate(-ang);
//     ctx.fillText(num.toString(), 0, 0);
//     ctx.rotate(ang);
//     ctx.translate(0, radius*0.85);
//     ctx.rotate(-ang);
//   }
// }

// function drawTime(ctx, radius){
//     var now = new Date();
//     var hour = now.getHours();
//     var minute = now.getMinutes();
//     var second = now.getSeconds();
//     //hour
//     hour=hour%12;
//     hour=(hour*Math.PI/6)+
//     (minute*Math.PI/(6*60))+
//     (second*Math.PI/(360*60));
//     drawHand(ctx, hour, radius*0.5, radius*0.07);
//     //minute
//     minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
//     drawHand(ctx, minute, radius*0.8, radius*0.07);
//     // second
//     second=(second*Math.PI/30);
//     drawHand(ctx, second, radius*0.9, radius*0.02);
// }

// function drawHand(ctx, pos, length, width) {
//     ctx.beginPath();
//     ctx.lineWidth = width;
//     ctx.lineCap = "round";
//     ctx.moveTo(0,0);
//     ctx.rotate(pos);
//     ctx.lineTo(0, -length);
//     ctx.stroke();
//     ctx.rotate(-pos);
// }

// Tricasol Aaccordion

var acc = document.getElementsByClassName("ts-accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("ts-accordion-active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}