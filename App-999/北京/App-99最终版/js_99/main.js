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
	
//	var cous1 = course(".h-timeHd", ".h-timeCont", ".h-cours");
	var cous2 = course(".h-marryList", ".h-marrInfo")
	var cousfs = course(".h-fsMarryList",".h-fsMarrInfo");
	var cousfs2 = course(".h-FamiList",".h-fsFamiInfo");
	function course(hd, conent, box) {
		var $titleLi = $(hd).find("li");
		var $conLi = $(conent).find("li");
		$titleLi.each(function(index) {
			$(this).click(function() {
				var index = $(this).index();
				$(this).addClass("active").siblings().removeClass("active");
				$conLi.eq(index).addClass("active").siblings().removeClass("active");
				
			})
		});
	}

	$(".h-choseCity").click(function() {
		console.log(0)
		$(".legal-dialog").addClass("active");
	})
	$(".dialog-box-mask,.dialog-cancle,.dialog-return").click(function() {
		$(this).parents(".dialog-box").removeClass("active");
	});
	
	$(".h-fsHead .icon-paixu").click(function() {
		$(".fs-dialog-box").addClass("active");
	})
	$(".fs-dialog-box-mask").click(function() {
		$(this).parents(".fs-dialog-box").removeClass("active");
	});
	
	$(".h-fsHead .icon-jia").click(function() {
		$(".fs-dialogMuen").addClass("active");
	})
	$(".fs-dialog-box-mask").click(function() {
		$(this).parents(".fs-dialogMuen").removeClass("active");
	});
	
	var fsTab = $(".h-fsTabHd li");
//	var fsBox = $(".h-fsTabBd>.h-fsTabBox");
//	fsTab.each(function(index){
//		$(this).click(function(){
//			var index = $(this).index();
//			$(this).addClass("active").siblings().removeClass("active");
//			fsBox.eq(index).addClass("active").siblings().removeClass("active");
//		})
//	})
	
	$(".h-indexSearch").click(function(){
		$(".hd-searchTow").addClass("active")
	})
	$(".h-searchFale").click(function(){
		$(".hd-searchTow").removeClass("active")
	})
})