
function silderCourse(time){
	var Num = 0;
	var bgNum = $(".silder-bg li").length;
	var timer ;
	timer = setInterval(course,time);
	
	function course(){
		Num++
		Num %= bgNum
		$(".silder-bg li").eq(Num).addClass("enter").removeClass("leave").siblings().addClass("leave").removeClass("enter");
		$(".silder-con li").eq(Num).addClass("enter").siblings().removeClass("enter");
		$(".silder-page li").eq(Num).addClass("active").siblings().removeClass("active");
	};
	
	$(".banner").hover(function(){
		$(".silder-btn").addClass("active");
		clearInterval(timer);
	},function(){
		$(".silder-btn").removeClass("active");
		timer = setInterval(course,time);
	});
	
	$(".silder-page li").each(function(index){
		var _this = $(this);
		_this.click(function(){
			Num = index;
			$(".silder-bg li").eq(Num).addClass("enter").removeClass("leave").siblings().addClass("leave").removeClass("enter");
			$(".silder-con li").eq(Num).addClass("enter").siblings().removeClass("enter");
			$(".silder-page li").eq(Num).addClass("active").siblings().removeClass("active")
		})
	});
	
	$(".slider-left-btn").click(function(){
		Num--
		Num %= bgNum
		console.log(Num);
		$(".silder-bg li").eq(Num).addClass("enter").removeClass("leave").siblings().addClass("leave").removeClass("enter");
		$(".silder-con li").eq(Num).addClass("enter").siblings().removeClass("enter");
		$(".silder-page li").eq(Num).addClass("active").siblings().removeClass("active")
	});
	$(".slider-right-btn").click(function(){
		course();
	});
}
