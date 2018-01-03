<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><if condition=" isset($SEO['title']) && !empty($SEO['title']) ">{$SEO['title']}</if>{$SEO['site_title']}</title>
		<link href="http://at.alicdn.com/t/font_521289_kb4xo0p0ndayk3xr.css" rel="stylesheet"/>
                <link href="{$config_siteurl}statics/style1/css/main.css" rel="stylesheet" type="text/css" />
                <script src="{$config_siteurl}statics/style1/js/jquery.js" type="text/javascript"></script>
	</head>
	<body class="bgf2">
		<template file="Content/header.php"/>
		<div class="lists-banner">
			<img src="{$config_siteurl}statics/style1/images/lists-banner.jpg" alt="" />
		</div>
		<div class="lists-navite bgff fz14 c59">
                    <div class="warp">
                        <span>您的位置：</span>
                        <i class="iconfont icon-shouye"></i>
                        <a href="{$config_siteurl}" class="c59">{$Config.sitename}</a>&gt;
                        <navigate catid="$catid" space=" &gt; " />
                    </div>
		</div>
		<div class="lists-content warp clear fz18">
                    <ul class="fl lists-title bgff">                  
                        <get sql="SELECT catname FROM gui_category WHERE catid=(SELECT parentid FROM gui_category WHERE catid = $catid)"  num="1">
                            <li class="bg-blue cff bb lits-first">{$data[0][catname]}</li>
                        </get>
                        <get sql="SELECT parentid FROM gui_category WHERE catid=$catid"  num="1">
                            <content action="category" catid="$data[0][parentid]"  order="listorder ASC" >
                        </get>
                        <volist name="data" id="vo">
                            <if condition="$vo.catid == $catid">
                                <li class="active plr10"><a href="{$vo.url}" class="c59">{$vo.catname}</a><div class="bb"></div></li>
                                <else />
                                <li><a href="{$vo.url}" class="c59">{$vo.catname}</a><div class="bb"></div></li>
                            </if>
                        </volist>
                        </content>
                    </ul>
			<div class="fr bgff lists-info">
				<ul class="list-info-ul mb20">
                                    <content action="lists" catid="$catid" order="id DESC" num="5" page="$page">
                                          <volist name="data" id="vo">
					<li>
						<a href="{$vo.url}" class="p-ellipsis di-vm fz14 c59"><notempty  name="vo.thumb"><span class="c-orange">【图】</notempty ></span>{$vo.title}</a>
						<span class="fr fz14 c8e">{$vo.updatetime|date="m-d",###}</span>
					</li>
                                         </volist>
				</ul>
				<ul class="bt pt30 lists-page fz14 c81">
					  {$pages}
				</ul>
                              </content>
			</div>
		</div>
<template file="Content/footer.php"/>
	</body>
	<script>
		
	</script>
</html>
