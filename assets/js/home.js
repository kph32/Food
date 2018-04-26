//<!-- pageTop -->
$(document).ready(function() {
	var flag = false;
	var pagetop = $('.pagetop');
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			if (flag == false) {
				flag = true;
				pagetop.stop().animate({
					'bottom': '2vh'
				}, 1000);
			}
		} else {
			if (flag) {
				flag = false;
				pagetop.stop().animate({
					'bottom': '100%'
				}, 500);
			}
		}
	});
	pagetop.click(function () {
		$('body, html').animate({ scrollTop: 0 }, 500);
		return false;
	});



//<!-- ===countNumber====================================== -->
	var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
	$('.map-3d-strongNumber').animateNumber(
	  {
	    number: 5252,
	    numberStep: comma_separator_number_step
	  },1350
	);
// $('.map-3d-strongNumber').animateNumber({ number: 5252 });


//<!-- ===PromoClick====================================== -->
/// When Click stage goes to
  function clickGo(px){
    $(".promo-show-moveTruck1").stop().animate({"left": px }, 100,"linear");
    $(".promo-show-moveTruck2").stop().animate({"left": px }, 100,"linear");
    $(".promo-show-moveTruck3").stop().animate({"left": px }, 100,"linear");
    // $(".promo-show-board").delay(600).stop().animate({"left": px}, 1350);
    $(".promo-show-building").delay(400).stop().animate({"left": px}, 3000);
    $(".promo-show-mScene").delay(200).stop().animate({"left": px}, 2000);
    $(".promo-show-mountain-g").delay(600).stop().animate({"left": px}, 2000);
   
    $(".promo-show-bg").delay(200).stop().animate({
    	"left": px,
    	// opacity:"0.5",
    	//  'filter'         : 'blur(100%)',
	   // '-webkit-filter' : 'blur(100%)',
	   // '-moz-filter'    : 'blur(100%)',
	   // '-o-filter'      : 'blur(100%)',
	   // '-ms-filter'     : 'blur(100%)'
    	}, 1350);

     // $(".moon").delay(600).stop().animate({"bottom": "-1%"}, 1600);

    if( px !== 0){
      $(".promo-show-photo1 img").addClass("photoActive");
      $(".promo-show-photo2 img").removeClass("photoActive");
      $(".promo-show-photo3 img").removeClass("photoActive");
    }else if( px == -100){
      $(".promo-show-photo2 img").addClass("photoActive");
      $(".promo-show-photo1 img").removeClass("photoActive");
      $(".promo-show-photo3 img").removeClass("photoActive");
    }else {
      $(".promo-show-photo3 img").addClass("photoActive");
      $(".promo-show-photo1 img").removeClass("photoActive");
      $(".promo-show-photo2 img").removeClass("photoActive");
    }

    //LOGO連結
    // if(px != 0){
    //   $("h1").addClass("rato");
    // }else{
    //   $("h1").removeClass("rato");
    // }
  }//end function



//<!-- ===clickPhoto====================================== -->
// (clicado needs be global)
  $(".promo-show-photo a").click(function(){
  	var promoPhoto = $(this).index();

    clickGo(promoPhoto*-100+'%');
    console.log($(this).index());

 	// if( promoPhoto = 0){
  //     	$(".promo-show").css("background","black");
  //   }else if(promoPhoto = 1){
		// $(".promo-show").css("background","red");
  //   }else{
		// $(".promo-show").css("background","black");
  //   }

  })



/*-----------------------------------------------------------------------
=PARALAX city
-----------------------------------------------------------------------*/
$(document).ready(function(){
  $(document).mousemove(function(e){
    var yMouse = e.pageY;
    var xMouse = e.pageX;
    var yCenter = $(window).width()/2;
    var xCenter = $(window).height()/5;
    var offsetY = yMouse - yCenter;
    var offsetX = xMouse - xCenter;
    $(".promo-show-mountain-g").css({"bottom": -offsetY*0.01});
    $(".promo-show-mScene").css({"bottom": -offsetY*0.01});
    $(".shop-order-show-p1-g").css({"left": -offsetX*0.002+'%'});
    $(".shop-order-show-p2-g").css({"left": -25-offsetX*0.001+'%'});
    $(".shop-order-show-p3-g").css({"left": 25-offsetX*0.001+'%'});

    $("#map-3d-Cloud8p").css({"left": 13-offsetX*0.003+'%'});
    $("#map-3d-Cloud9p").css({"left": 59-offsetX*0.001+'%'});
    $("#map-3d-Cloud10p").css({"left": 4-offsetX*0.002+'%'});
    $("#map-3d-Cloud11p").css({"left": 76-offsetX*0.002+'%'});
    $("#map-3d-Cloud12p").css({"left": 17-offsetX*0.005+'%'});
    $("#map-3d-Cloud13p").css({"left": 71-offsetX*0.003+'%'});

    // $(".map-3d-Cloud8").css({"top": -offset*0.01});
    // $(".map-3d-Cloud9").css({"top": -offset*0.02});
    // $(".promo-show-ground").css({"bottom": -offset*0.01});
   });//end mouse move
});




});



//<!-- ===scrollW====================================== -->
new WOW().init();


//<!-- ===cloud====================================== -->
  var ypos,np8,np9,ap10,ap11,dp12,dp13;
  function parallex(){
    ypos=window.pageYOffset;
    np8=document.getElementById('map-3d-Cloud8p');
    np9=document.getElementById('map-3d-Cloud9p');
    ap10=document.getElementById('map-3d-Cloud10p');
    ap11=document.getElementById('map-3d-Cloud11p');
    dp12=document.getElementById('map-3d-Cloud12p');
    dp13=document.getElementById('map-3d-Cloud13p');
    np8.style.top=105-(ypos*.03)+'%';
    np9.style.top=-20+(ypos*.03)+'%';
    ap10.style.top=130-(ypos*.06)+'%';
    ap11.style.top=0+(ypos*.04)+'%';
    dp12.style.top=55-(ypos*.06)+'%';
    dp13.style.top=30+(ypos*.04)+'%';
  }
  window.addEventListener('scroll',parallex);