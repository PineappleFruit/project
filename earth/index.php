<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>{$title}</title>
		<link href="http://at.alicdn.com/t/font_521289_kb4xo0p0ndayk3xr.css" rel="stylesheet"/>
                <link href="{$config_siteurl}statics/style1/css/main.css" rel="stylesheet" type="text/css" />
                <script src="{$config_siteurl}statics/style1/js/jquery.js" type="text/javascript"></script>
                 <script src="{$config_siteurl}statics/style1/js/carrot.js" type="text/javascript"></script>
	</head>
	<body class="bgf2">
	<template file="Content/header.php"/>
		<div class="lists-banner">
			<img src="{$config_siteurl}statics/style1/images/lists-banner.jpg" alt="" />
		</div>
		<div class="lists-navite bgff fz14 c59">
                    <div class="warp">
                        <div class="warp">
                            <span>您的位置：</span>
                            <i class="iconfont icon-shouye"></i>
                            <a href="{$config_siteurl}" class="c59">首页</a>
                            <span>&gt;</span>
                            <span>{$title}</span>
                        </div>
                    </div>
		</div>
		<div class="lists-content warp clear fz18">
                  <div class="fl email-title">
				<ul class="fl lists-title bgff">
					<li class="bg-blue cff bb lits-first">领导信箱</li>
					<li class="plr10"><a href="{:getCategory(50,'url')}" class="c59">写信需知</a><div class="bb"></div></li>
					<li class=""><a href="{:U('index/index')}" class="c59">我要写信</a><div class="bb"></div></li>
                                        <li class=""><a href="{:U('index/index',array('from_type'=>7))}" class="c59">我要办件</a><div class="bb"></div></li>
                                        <li class=""><a href="{:U('index/problem_list')}" class="c59">网上调查</a><div class="bb"></div></li>
				</ul>
			</div>
			<div class="fr bgff lists-info write-info clear">
				<p class="upload" style="display: none;">{:U('Discuz/index/upload')}</p>
				<form action="{:U('Discuz/index/msg')}" class="write" method="post" id="submitform" enctype="multipart/form-data" target="form1"> 
					<p class="fz20 c59 mb10"><b class="fw-b">信访人信息</b>（注意：带<span class="c-red">*</span>号的信息必须填写）</p>
					<div class="di-vm write-small">
						<span class="tx-r">姓名：</span>
						<input type="" name="username" id="" value="" />
						<i class="c-red">*</i>
					</div>
					<div class="di-vm write-small">
						<span class="tx-r">信件分类：</span>
						<select name="cid" class="fz18">
							<option value="1">意见建议</option>
							<option value="2">投诉举报</option>
							<option value="3">申诉</option>
							<option value="4">求决</option>
							<option value="5">咨询</option>
							<option value="6">其他</option>
						</select>
					</div>
					<div class="di-vm write-small">
						<span class="tx-r">证件类型：</span>
						<select name="cardtype" class="fz18">
							<option value="身份证">身份证</option>
							<option value="教师证">教师证</option>
							<option value="军官证">军官证</option>
							<option value="其他">其他</option>
						</select>
					</div>
					<div class="di-vm write-small">
						<span class="tx-r">证件号码：</span>
						<input type="" name="cardid" id="" value="" />
						<i class="c-red">*</i>
					</div>
					<div class="di-vm write-small">
						<span class="tx-r">联系地址：</span>
						<input type="" name="address" id="" value="" />
					</div>
					<div class="di-vm write-small">
						<span class="tx-r">手机号码：</span>
						<input type="" name="phone" id="" value="" />
						<i class="c-red">*</i>
					</div>
					<div class="di-vm write-small">
						<span class="tx-r">电子邮箱：</span>
						<input type="" name="email" id="" value="" />
						<i class="c-red">*</i>
					</div>
					<p class="fz20 c59 mb10 mt60"><b class="fw-b">信访人信息</b>（注意：带<span class="c-red">*</span>号的信息必须填写）</p>
					<div class="di-vm write-small write-lang">
						<span class="tx-r">标题：</span>
						<input type="" name="title" id="" value="" />
						<i class="c-red">*</i>
					</div>
					<div class="di-vm write-small write-textarea">
						<span class="tx-r">内容：</span>
						<textarea name="content" rows="" cols="" class="fz20"></textarea>
						<i class="c-red">*</i>
					</div>
					<div class="di-vm write-small">
						<span class="tx-r">相关附件：</span>
						<input type="file" name="photo" id="" value="" class="upload-input"/>
					</div>
					
					<div class="di-vm write-small write-short">
						<span class="tx-r">验证码：</span>
						<input type="" name="code" id="" value="" />
						<div class="dib all-code">
							<img  id="verify_img" src="{:U('Discuz/index/msgVerify')}"/>
						</div>
						<b class="fz16 write-change">看不清，换一张</b>
						<i class="c-red">*</i>
					</div>
					
					<div class="tx-c mt40 fz20 write-btn sure-null">
						<input class="btn btn-submit mr40 cff bg-blue" type="submit" value="提交" >
						<button class="btn c59" type="reset">重置</button>
					</div>
				</form>
				<iframe name="form1"></iframe>
			</div>
		</div>
        <!--弹窗-->
		<div class="dialog-box">
			<div class="dialog-mask"></div>
			<div class="dialog-con tx-c">
				<p class="mt40 dialogText word-break plr10">上传中，请耐心等待</p>
				<div class="dialogBtn mt30">
					<span>确定</span>
				</div>
			</div>
		</div>
		<!--弹窗结束-->
	<template file="Content/footer.php"/>
	</body>
        <script>
            $("#submitform").submit(function(){
                $(".dialog-box").addClass("active");
               // return false;
            })
           	
	        function success(str){
	        	$(".dialogText").text(str);
	        	$(".dialogBtn").addClass("active");
	        	$(".dialogBtn").click(function(){
	           		successBtn();
	           	})
	        }
	        function fail(str){
	        	$(".dialogText").text(str);
	        	$(".dialogBtn").addClass("active");
	        	$(".dialogBtn").click(function(){
	           		failBtn()
	           	})
	        }
	        function successBtn(){
	        	window.location.reload();
	        }
	        function failBtn(){
	        	$(".dialog-box").removeClass("active");
	        }
        </script>
</html>
