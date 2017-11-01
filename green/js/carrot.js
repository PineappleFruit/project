/**
 * Created by Administrator on 2017/10/20.
 */
$(function () {
    var $arrowTop = $(".arrowTop");
    var $arrowFoot = $(".arrowFoot");
    var $box = $(".boxContent");
    $(".boxContent").html($(".boxContent").html()+$(".boxContent").html());
    var $box_length = $(".boxContent").find('li').length;
    var $box_height = $box.find("li").outerWidth(true);
    var num = 0;
    var $oli = $(".course-page li");
//  $(".box-content").height($box_length*$box_height);

	function reset () {
		for(var i = 0; i < $oli.length;i++){
		$oli[i].className = "";
		}
	}

    timer = setInterval(course,2000);
    function course() {
        if (!$box.is(":animated")) {
            num++;
            if (num < $box_length / 2) {
                $box.animate({left: -num * $box_height + 'px'}, 600);
            } else {
                num = 0;
                $box.animate({left: -($box_length / 2) * $box_height + 'px'}, 600, function () {
                    $box.css("left", 0);
                });
            }
            
        }
        reset();
    	console.log(num);
        $oli[num].className = "active";
    }
	$oli.each(function (index) {
        $(this).click(function () {
            console.log($(this).index());
            var index = $(this).index();
            $box.animate({left:-index*$box_height},600)
            reset();
        	$oli[index].className = "active";
        })
    })
	$(".index-course").hover(function () {
       clearInterval(timer);
    },function () {
        clearInterval(timer);
        timer = setInterval(course,2000)
    });
})