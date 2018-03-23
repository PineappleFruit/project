$(function(){
	var select = false;
	$(".right-nav-btn").click(function(){
		if(select){
			$(".right-nav,.right-nav-btn").removeClass("open");
			select = !select;
		}else{
			$(".right-nav,.right-nav-btn").addClass("open");
			select = !select;
		}
	})
	$(".toogle").each(function(){
		var _this = $(this);
		var upnav = false;
		var height = _this.next().find("li").height();
		var length = _this.next().find("li").length;
		_this.click(function(){
			if(upnav){
				$(this).next().animate({'height':0})
				upnav = !upnav;
			}else{
				$(this).next().animate({'height':height*length})
				upnav = !upnav;
			}
		})
	});
	$("#menu>li").each(function(index){
		var _this = $(this);
		var select = false;
		$(this).click(function(){
			console.log(select);
			_this.addClass("active").siblings().removeClass("active");
			if(index > 0){
				$(".menu-nav-con").removeClass("active").eq(index - 1).addClass("active");
	//			$(".menu-nav-con").removeClass("active");
				if(select){
					$(".menu-nav-con").removeClass("active");
					select = !select;
				}else{
					$(".menu-nav-con").removeClass("active").eq(index - 1).addClass("active");
					select = !select;
				}
			}
			
			
		})
	})

	
})
function silderCourse(time){
	var Num = 0;
	var bgNum = $(".silder-bg li").length;
//	$(".silder-page li").each(function(index){
//		var _this = $(this);
//		_this.click(function(){
//			Num = index;
//			$(".silder-bg li").eq(Num).addClass("enter").removeClass("leave").siblings().addClass("leave").removeClass("enter");
//			$(".silder-con li").eq(Num).addClass("enter").siblings().removeClass("enter");
//			$(".silder-page li").eq(Num).addClass("active").siblings().removeClass("active")
//		})
//	});
	
	$(".slider-left-btn").click(function(){
		$(".slider-right-btn").addClass("active")
		if(Num > 0){
			Num--
	//		Num %= bgNum
			console.log(Num);
			$(".silder-bg li").eq(Num).addClass("enter").removeClass("leave").siblings().addClass("leave").removeClass("enter");
			$(".silder-con li").eq(Num).addClass("enter").siblings().removeClass("enter");
//			$(".silder-page li").eq(Num).addClass("active").siblings().removeClass("active")
		}
		if(Num == 0){
    		$(".slider-left-btn").removeClass("active");
    	}
		
	});
	$(".slider-right-btn").click(function(){
		console.log(Num)
		$(".slider-left-btn").addClass("active");
		if(Num < bgNum - 1){
			Num++
//			Num %= bgNum
			$(".silder-bg li").eq(Num).addClass("enter").removeClass("leave").siblings().addClass("leave").removeClass("enter");
			$(".silder-con li").eq(Num).addClass("enter").siblings().removeClass("enter");
//			$(".silder-page li").eq(Num).addClass("active").siblings().removeClass("active");
		}
		if(Num == bgNum - 1){
			$(".slider-right-btn").removeClass("active")
		}
	});
}

function commmeSilder(theme,container,size,model){
	var $li = container.find("li");
	var $width = 0;
//	var $ul = container.find("ul");
//	var $lastLi = $ul.find("li").eq(0).clone();
//	$ul.append($lastLi);
	container.html(container.html() + container.html());
	var $length = container.find("li").length;
	var $boxWidth = container.find("li").outerWidth(true);
	var $transWidth;
	var timer;
	var num = 0;
	var $prevBtn = theme.find(".video-prev-btn");
	var $nextBtn = theme.find(".video-next-btn");
	
	if(size){
		console.log(parseInt(model))
		$width = ($(window).width() - (parseInt(model)-1)*20 )/parseInt(model); 
		container.find("li").width($width);
		$transWidth = container.find("li").outerWidth(true);
		$(window).resize(function () {          //当浏览器大小变化时
		    $width = ($(window).width() - (parseInt(model)-1)*20 )/parseInt(model); 
			container.find("li").width($width);
			$transWidth = container.find("li").outerWidth(true);
//			console.log('宽度');
//			console.log($(window).width());
//			console.log($(document.body).outerWidth(true));
		});
		
	}
	container.width(($length * $transWidth) + 1000 );
	$nextBtn.click(course);
	$prevBtn.click(function(){
		if (!container.is(":animated")) {
            num--;
//          console.log(num);
            if (num > 0) {
                container.animate({left: -num * $transWidth + 'px'}, 600);
            } else { 
                container.css("left",-($length/2) * $transWidth + 'px');
                num = $length/2 - 1 ;
                container.animate({left: - ($length/2 - 1 ) * $transWidth + 'px'}, 600);
            }   
        }
	})
	function course() {	
        if (!container.is(":animated")) {
            num++;
//          console.log($transWidth);
            if (num < $length - parseInt(model)) {
                container.animate({left: -num * $transWidth + 'px'}, 600);
            } else {
                
//              container.animate({left: 0, 600, function () {
                    container.css("left", 0);
                    num = 1;
                    container.animate({left: -$transWidth + 'px'}, 600);
                    
//              });
            }
            
        }
        
    }
}
