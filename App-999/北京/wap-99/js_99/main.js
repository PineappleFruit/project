$(function() {
	$(window).scroll(function() {
		if($(window).scrollTop() >= 50) {
			$('.h-fixed').fadeIn();
		} else {
			$('.h-fixed').fadeOut();
		}
	});
	$(".h-top ").click(function() {
		$('html,body').animate({
			scrollTop: 0
		}, 500);
	})
	var mySwiper1 = new Swiper('.h-boxOne', {
		speed: 700,
		autoplayDisableOnInteraction: false,
		wrapperClass: 'banner-wrapper',
		slideClass: 'banner-slide',
		pagination: '.banner-pagination',
		paginationClickable: true,
		spaceBetween: 20,
		observer: true,
		observeParents: true
	});
	var cous1 = course(".h-timeHd", ".h-timeCont", ".h-cours");
	var cous2 = course(".h-marryList", ".h-marrInfo")

	function course(hd, conent, box) {
		var $titleLi = $(hd).find("li");
		var $conLi = $(conent).find("li");
		$titleLi.each(function(index) {
			$(this).click(function() {
				var index = $(this).index();
				$(this).addClass("active").siblings().removeClass("active");
				$conLi.eq(index).addClass("active").siblings().removeClass("active");
				//				mySwiper1.update()
				console.log(mySwiper1)
			})
		});
	}

	$(".h-choseCity").click(function() {
		$(".legal-dialog").addClass("active");
	})
	$(".dialog-box-mask,.dialog-cancle,.dialog-return").click(function() {

		$(this).parents(".dialog-box").removeClass("active");

	});
})