/**
 * Created by Administrator on 2017/10/20.
 */
$(function () {
    var $arrowTop = $(".arrowTop");
    var $arrowFoot = $(".arrowFoot");
    var $box = $(".boxContent");
    $(".boxContent").html($(".boxContent").html()+$(".boxContent").html());
    var $box_length = $(".boxContent").find('li').length;
    var $box_height = $box.find("li").outerHeight(true);
    var num = 0;
    $(".box-content").height($box_length*$box_height);

    var $content = $(".content");
    $(".content").html($(".content").html()+$(".content").html());
    var $contentLength = $(".content").find(".contTxt").length;
    var $contentHeight = $content.find(".contTxt").outerHeight(true);
    $(".content").height($contentLength*$contentHeight);
    $arrowFoot.click(course);
    var $boxLi = $(".boxContent li");
    function course() {
        console.log(num);
        if (!$box.is(":animated")) {
            num++;
            if (num < $box_length / 2) {
                $box.animate({top: -num * $box_height + 'px'}, 600);
                $content.animate({top :-num * $contentHeight + 'px'},600)
            } else {
                num = 0;
                $box.animate({top: -($box_length / 2) * $box_height + 'px'}, 600, function () {
                    $box.css("top", 0);
//                            $content.css("top",0);
                });
                $content.animate({top:-($contentLength / 2) * $contentHeight + 'px'} ,600 ,function () {
                    console.log('x');
                    $content.css("top",0);
                })
            }
        }
    }
    $arrowTop.click(function () {
        if (!$box.is(":animated")) {
            if(num > 0){
                num--;
                $box.animate({top:-num*$box_height+'px'},600);
                $content.animate({top:-num*$contentHeight+'px'},600);
            }else {
                $box.css("top",-($box_length/2)*$box_height);
                $content.css("top",-($contentLength/2)*$contentHeight);
                num = ($box_length)/2 - 1;
                $box.animate({top:-num*$box_height},600);
                $content.animate({top:-num*$contentHeight},600)
            }
        }
    });
    console.log($boxLi);

//            点击事件
    $boxLi.each(function (index) {
        $(this).click(function () {
            console.log($(this).index());
            var index = $(this).index();
            $box.animate({top:-index*$box_height},600);
            $content.animate({top:-index*$contentHeight},600)
        })
    });
})