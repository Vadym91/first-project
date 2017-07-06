
$(function() {

	//$(".slider").slider();
	//$('#container').beforeAfter();
	$(".af-bf #container").beforeAfter({
		animateIntro : false,
		introDelay : 2000,
		introDuration : 500,
		showFullLinks : false
	});


	function heightses() {
		$(".main-do .item-do-it").height('auto').equalHeights();
		$(".item-vertical p").height('auto').equalHeights();
	};

	$(window).resize(function() {
		heightses();
	});

	heightses();


	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};
  

  	//$('.item-vertical .mfp-gallary').magnificPopup({type:'image'});
	$('.item-vertical .mfp-gallary').magnificPopup({
		type: 'image',
		mainClass: 'mfp-with-zoom',
		closeOnContentClick: true,
		removalDelay: 300,
		zoom: true,
		image: {
			verticalFit: false //Размер еартинки при клике, на єкран или реальная true
		}

	});




	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$(".forms1").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "http://underwater-studio.com/mail.php", //mail.php устанавливаеться в корень папки wordpress и в common.js меняеться его путь
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
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

});
