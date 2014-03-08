$(document).ready(function() {
	
	// preload demo slideshow


  // match Hero height to window

  var windowHeight = $(window).height();
  // var navHeight = $('.header').height();
  var navHeight = 63;
  $('#hero').height(windowHeight - navHeight);

  //smooth scroll
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');
 
  $('a[href*=#]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target) {
        var targetOffset = $target.offset().top - navHeight;
        $(this).click(function(event) {
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 400, function(e) {
            //location.hash = target;
          });
        });
      }
    }
  });
 
  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }
 
 // adjust top menu
 var technologyTop = $("#technology").offset().top - navHeight;
 var missionTop = $("#mission").offset().top -  navHeight;
 var faqTop = $("#faq").offset().top -  navHeight;
 var contactTop = $("#contact").offset().top -  navHeight; 

 $(window).scroll(function(){
 
	   var top = 0;
       top = $(window).scrollTop();
	   // console.log(top);
       
       if(top < technologyTop){
		  $(".header > ul li").removeClass("selected");
       }

       if((top >= technologyTop) && (top < missionTop)){
		  $(".header ul li").removeClass("selected");
          $("#litechnology").addClass("selected");
       }
       
       if((top >= missionTop) && (top < faqTop)){
		  $(".header ul li").removeClass("selected");
          $("#limission").addClass("selected");
       }
          
       if((top >= faqTop) && (top < contactTop)){
		  $(".header ul li").removeClass("selected");
          $("#lifaq").addClass("selected");
       }
       
       if((top >= contactTop)){
		  $(".header ul li").removeClass("selected");
          $("#licontact").addClass("selected");
       } 
 });
 
});

// Fade Out

function fadeOut(target) {
	$(target).animate({opacity: 0.3}, 500, function() {
		// console.log("faded!")
	})
}

function fadeIn(target) {
	$(target).animate({opacity: 1.0}, 500, function() {
		// console.log("unfaded!")
	})
}
