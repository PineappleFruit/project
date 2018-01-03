/**
 * Created by Administrator on 2017/10/20.
 */
$(function () {
//	top course
    var $arrowTop = $(".arrowTop");
    var $arrowFoot = $(".arrowFoot");
    var $box = $(".boxContent");
    $(".boxContent").html($(".boxContent").html()+$(".boxContent").html());
    var $box_length = $(".boxContent").find('li').length;
    var $box_height = $box.find("li").outerWidth(true);
    var num = 0;
    var $oli = $(".course-page li");

//	center course	
	var $newcontent = $(".new-img-box");
    $(".new-img-box").html($(".new-img-box").html()+$(".new-img-box").html());
    var $newLength = $(".new-img-box").find("img").length;
    var $newHeight = $newcontent.find("img").outerHeight(true);
    $(".new-img-box").height($newLength*$newHeight);
	var $imgLi = $(".new-list li");
 
//  new info
	var $newInfo = $(".new-info-title");
	var $newBox = $(".new-info-box");
	

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
//  	console.log(num);
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
	$(".index-coures").hover(function () {
//		console.log('x')
       clearInterval(timer);
    },function () {
        clearInterval(timer);
        timer = setInterval(course,5000)
    });
    
//  console.log($imgLi);
    $imgLi.each(function (index) {
        $(this).click(function () {
//          console.log($(this));
            var index = $(this).index();
//          $box.animate({top:-index*$box_height},600);
            $newcontent.animate({top:-index*$newHeight},600);
            $(this).addClass("active").siblings().removeClass("active")
        })
    });
    
    $newInfo.each(function(index){
    	$(this).click(function(){
    		$(this).addClass("active").siblings().removeClass("active");
    		$newBox.eq(index).addClass("active").siblings().removeClass("active")
    	})
    })
    
    //sdk
    // 百度地图API功能
		var map = new BMap.Map("allmap");
		var point = new BMap.Point(116.331398,39.897445);
		var cityName;
		map.centerAndZoom(point,12);
	
		function myFun(result){
			cityName = result.name;
			map.setCenter(cityName);
//			console.log(cityName)
			$(".location").text(cityName);
			$.ajax({
                    url:"http://api.map.baidu.com/telematics/v3/weather",
                    type:"get",
                    data:{
                          location:cityName,
                          output:'json',
                          ak:'6tYzTvGZSOpYB5Oc2YGGOKt8'
                    },
                    /*预期服务器端返回的数据类型，假设我现在跨域了，我就改成jsonp 就可以了 */
                dataType:"jsonp",
                success:function(data){
                    $(".data").text(data.date)
					$(".temp").text(data.results[0].weather_data[0].temperature);
					
                }
            })
		}
		var myCity = new BMap.LocalCity();
		myCity.get(myFun);
		var list = ["周一","周二","周三","周四","周五","周六","周日"]
		var today = new Date();
		var todayNum = today.getUTCDay();
		$(".data-time").text(list[todayNum - 1]);
//		console.log(today.getUTCDay())

		

//		$(".header-ul-li li").each(function(index){
//			console.log($(this).text())
////			if($(this).text().length > 5){ 
////				$(this).css("font-size","12px")
////			}
//		})
console.log('xxxx')
		console.log($(".index-more select>option"))
		$(".index-more select").change(function(){
//			confirm("你确定提交吗");
			if (confirm("你确定要离开此页面吗？")) {  
				window.open($(this).find("option:selected").val());
	       }  
		})
})