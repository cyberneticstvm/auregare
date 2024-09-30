(function ($) {
    "use strict";
	//===== jquery code for sidebar menu
	$('.menu-item.has-submenu .menu-link').on('click', function(e){
		e.preventDefault();
		if($(this).next('.submenu').is(':hidden')){
			$(this).parent('.has-submenu').siblings().find('.submenu').slideUp(200);
		} 
		$(this).next('.submenu').slideToggle(200);
	});

	// mobile offnavas triggerer for generic use
	$("[data-trigger]").on("click", function(e){
		e.preventDefault();
		e.stopPropagation();
		var offcanvas_id =  $(this).attr('data-trigger');
		$(offcanvas_id).toggleClass("show");
		$('body').toggleClass("offcanvas-active");
		$(".screen-overlay").toggleClass("show");

	}); 

	$(".screen-overlay, .btn-close").click(function(e){
		$(".screen-overlay").removeClass("show");
		$(".mobile-offcanvas, .show").removeClass("show");
		$("body").removeClass("offcanvas-active");
	}); 

	// minimize sideber on desktop

	$('.btn-aside-minimize').on('click', function(){
		if( window.innerWidth < 768) {
			$('body').removeClass('aside-mini');
			$(".screen-overlay").removeClass("show");
			$(".navbar-aside").removeClass("show");
			$("body").removeClass("offcanvas-active");
		} 
		else {
			// minimize sideber on desktop
			$('body').toggleClass('aside-mini');
		}
	});

	//Nice select
	if ($('.select-nice').length) {
    	$('.select-nice').select2();
	}
	// Perfect Scrollbar
	if ($('#offcanvas_aside').length) {
		const demo = document.querySelector('#offcanvas_aside');
		const ps = new PerfectScrollbar(demo);
	}

	// Dark mode toogle
	$('.darkmode').on('click', function () {
		$('body').toggleClass("dark");
	});

	$(document).on("change", ".multi_img", function(e){
        if (window.File && window.FileReader && window.FileList && window.Blob){
          var data = $(this)[0].files; //this file data           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
                      $('#multi_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
    });
	
})(jQuery);