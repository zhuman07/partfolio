$(document).ready(function() {
	// portfolio item each id
	$('.portfolio-item').each(function(i) {
		$(this).find('.popup-content').attr('href', '#work_' + i);
		$(this).find('.post-full').attr('id', 'work_' + i);
	})

	// js mixit
	$('.portfolio-table').mixItUp({
	
});

	// portfolio category active
	$(".s_portfolio li").click(function() {
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	});


		// avatar popup
	  $('.popup').magnificPopup({type:'image'});

	  // portfolio item window
	  $('.popup-content').magnificPopup();

	 // animated
	$(".top-text h1").animated("zoomIn");
	$(".top-text p, .section-header").animated("fadeInUp");
	$(".avatar").animated("flipInX", "flipOutX");

	// top menu hover voic
	var soundLink = $("#sound-link")[0];
     $("header .top-menu ul li a").mouseenter(function() {
         soundLink.play();
     });
           


   // top menu active
	$("header .top-menu ul li a").each(function () {
	if (this.href == location.href) $(this).parent().addClass('active');
	});

	// form validate
	$("input, select, textarea").jqBootstrapValidation();


	// paralax options
	function heightDetect() {
			$(".main-head").css("height", $(window).height());
		}
		heightDetect();
		$(window).resize(function() {
			heightDetect();
	})


// preloader options
	$(window).load(function() { 
		$(".loader-inner").fadeOut(); 
		$(".loader").delay(400).fadeOut("slow"); 
	});

// mobile menu icon
$(".toggle-menu").click(function() {
		$(".sandwich").toggleClass("active");
	});

$(".mob-menu ul a").click(function() {
		$(".mob-menu").fadeOut(600);
		$(".sandwich").toggleClass("active");
		$(".top-text").css("opacity", "1");
	}).append("<span>");

	$(".toggle-menu").click(function() {
		if ($(".mob-menu").is(":visible")) {
			$(".top-text").css("opacity", "1");
			$(".mob-menu").fadeOut(600);
			$(".mob-menu li a").removeClass("fadeInUp animated");
		} else {
			$(".top-text").css("opacity", ".1");
			$(".mob-menu").fadeIn(600);
			$(".mob-menu li a").addClass("fadeInUp animated");
		};
	});




	

//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
	

/*
	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};
	*/

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("#forma").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/myPortfolio/mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Сообщение отправлено</div>';
					$("#forma").hide();
				}
				else {result = msg;}
				$('#note').html(result);
				setTimeout(function() {
				// Done Functions
				$('#forma').trigger('reset');
				$("#note").addClass("hidden");
				$("#forma").css('display', 'block');
			}, 3000);
			}
		});
		return false;
	});

});
