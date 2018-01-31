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
		if($(".course-page li").length > 0){
			$oli[num].className = "active";
		}
        
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
// 		console.log($("#allmap"))
    	if($("#allmap").length > 0){
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
    	}
		
		


//		console.log($(".index-more select>option"))
		$(".index-more select").change(function(){
//			confirm("你确定提交吗");
			if (confirm("你确定要离开此页面吗？")) {  
				window.open($(this).find("option:selected").val());
	       }  
		})
		
//		console.log($(".info-gover-box div"));
		var listColor = ["bg-1","bg-2","bg-3","bg-4","bg-5","bg-6","bg-7","bg-8"];
		$(".info-gover-box div").each(function(index,list){
			$(this).removeClass("bg-1").addClass(listColor[index]);
		})
		

	$(".vote-input li").each(function(index){
		$(this).click(function(){
			console.log($(this))
			$(".vote-input input").removeClass("active")
			$(".vote-input input").eq(index).addClass("active").siblings().removeClass("active")
		})
	})
	
	$(".vote-btn .btn-submit").click(function(){
		var inputId = $("input[name = 'id']").val();
		var inputChecked = $(".vote-input input.active").attr("name");
		var url = $(".write-info form").attr("action");
		var data = {'id':inputId,'name':inputChecked}
		console.log(data);
//			$.post(url,data,function(res){
//				console.log(res);
//			})
		$.cookie("nowDate"+inputId,undefined)
//			console.log($.cookie('nowDate'));
		if($.cookie('nowDate'+inputId)){
			alert("今天已投票，请明日再来");
		}else{
			$.post(url,data,function(res){
				console.log(res);
				if(res == 200){
					var nowDate = new Date().getTime();
					$.cookie('nowDate'+inputId, nowDate, { expires: 1 });
					alert("已成功投票");
					console.log(nowDate);
				}
				if(res == 104){
					alert("请至少选择一项");
				}
			})
		}
		
	})
	
	$(".vote-btn button").click(function(){
		$(".vote-input input").removeClass("active")
	})
	
//	写信表单验证
	
//	所有表单共用判断是否为空
//	$(".sure-null .btn-submit").click(function(){
//		$(".write-small>input").each(function(index){
//			if($(this).val() == ''){
//				$(this).css("border","1px solid red");
////				alert("请填完所有选项");
//				return false;
//			}else{
//				$(this).css("border","1px solid #dadada");
//			}
//		})
//		$(".write-small>textarea").each(function(){
//			if($(this).val() == ''){
//				$(this).css("border","1px solid red");
////				alert("请填完所有选项");
//				return false;
//			}else{
//				$(this).css("border","1px solid #dadada");
//			}
//		})
//	})
	
//	表单验证 邮箱 证件号判断
	$("form :input").blur(function(){
		var $parent = $(this).parent();
		$parent.find(".msg").remove();
		if($(this).attr("name") == "email"){
			var emailVal = $.trim($(this).val());
			var emailRex = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;
			if(!emailRex.test(emailVal)){
				$(this).css("border","1px solid red");
				$parent.append("<span class='msg'></span>")
				return false;
			}else{
				$(this).css("border","1px solid #dadada");
				$parent.find(".msg").remove();
			}
		}
	})
	
//	写信验证码切换
	function changeImg(){ 
		var imgSrc = $("#verify_img").attr("src");
		document.getElementById('verify_img').src='http://www.klkfqlr.gov.cn/index.php?g=Discuz&m=index&a=msgVerify'+'&time='+Math.random();void(0);
	}
	
	$(".write-change").click(function(){
		changeImg();
	})
	
//	$(".write .btn-submit").click(function(){
//		var num = $("form .msg").length;
//		if(num){
//			return false;
//		}
//	})
})