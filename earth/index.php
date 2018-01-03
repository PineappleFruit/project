<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
                <title><if condition=" isset($SEO['title']) && !empty($SEO['title']) ">{$SEO['title']}</if>{$SEO['site_title']}</title>
		<link href="http://at.alicdn.com/t/font_521289_78bqvg6kn5wpcik9.css" rel="stylesheet"/>
                <link href="{$config_siteurl}statics/style1/css/main.css" rel="stylesheet" type="text/css" />
                <script src="{$config_siteurl}statics/style1/js/jquery.js" type="text/javascript"></script>
                <script type="text/javascript" src="{$config_siteurl}statics/style1/js/carrot.js" ></script>
                <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=sIGbSgP9UziFAZyNXUKlYDGFVjFNZ1l6"></script>
		<script type="text/javascript" src="{$config_siteurl}statics/style1/js/template-native.js" ></script>
	</head>
	<body>
		<template file="Content/header.php"/>
		<!--coures begin-->
		<div class="index-coures">
			<!--<div class="p10 bgff index-course content-box">-->
				<div class="boxContent">          
	                <ul>
                              <position action="position" posid="4">
                            <volist name="data" id="vo">
                                <li><a href="{$vo.data.url}" title="{$vo.data.title}"><img src="{$vo.data.thumb}"></a></li>
                            </volist>
                                   </position>
	                </ul>                       
	            </div>
	            <ol class="course-page tx-c">
	                <li class="active"><span class="di-vm"></span></li>
	                <li><span class="di-vm"></span></li>
	                <li><span class="di-vm"></span></li>
	            </ol>
			<!--</div>-->
		</div>
		<!--coures end-->
		<!--today news-->
		<div class="today-news bgf4 bb">
			<div class="warp">
                             <position action="position" posid="2">
				<div class="fl mt20 today-title">
                                     <volist name="data" id="vo">
					<div class="fz18 cff today-banner pl10" style="background-image: -webkit-image-set(url({$config_siteurl}statics/style1/images/today-news.png) 1x, url({$config_siteurl}statics/style1/images/today-news.svg) 2x);">今日头条</div>
					<a href="{$vo.data.url}" class="fz18 c-blue plr10">{$vo.data.title}</a>
                                         </volist>
				</div>
                                   </position>
				<div class="fr fz18 todat-info">
					<i class="iconfont icon-riqi c-blue"></i>
					<span class="data">2017-11-23</span>
					<span class="data-time">周三</span>
					<i class="iconfont icon-diqu c-blue"></i>
					<span class="location">凯里</span>
					<i class="iconfont icon-wendu c-blue"></i>
					<span class="temp">9°C~6°C</span>
				</div>
			</div>
		</div>
		<!--today news end-->
		<!--news-->
                 
		<div class="news warp clear">
                     <position action="position" posid="1">
				<ul class="new-list fl clear">
				   <li class="bg-blue cff new-bob active">
					<div class=" pl20 pt25">
						<i class="iconfont icon-gongzuodongtai pr10"></i>
						<div class="di-vm lh14">
                                                     <p class="fz16 p-ellipsis">{:getCategory(getCategory($data[0][catid],parentid),'catname')}</p>
							<p class="fz14 new-list-txt p-ellipsis">{$data[0][data][title]}</p>
						</div>	
					</div>
					<span></span>
				</li>				
				<li class="bg-blue cff new-bob new-bot">
					<div class=" pl20 pt25">
						<i class="iconfont icon-hot pr10"></i>
						<div class="di-vm lh14">
							<p class="fz16 p-ellipsis">{:getCategory(getCategory($data[1][catid],parentid),'catname')}</p>
							<p class="fz14 new-list-txt p-ellipsis">{$data[1][data][title]}</p>
						</div>
					</div>
					<span></span>
				</li>
				<li class="bg-blue cff new-bot new-bob">
					<div class="pl20 pt25">
						<i class="iconfont icon-notice-copy pr10"></i>
						<div class="di-vm lh14">
							<p class="fz16 p-ellipsis">{:getCategory(getCategory($data[2][catid],parentid),'catname')}</p>
							<p class="fz14 new-list-txt p-ellipsis">{$data[2][data][title]}</p>
						</div>
					</div>
					<span></span>
				</li>
				<li class="bg-blue cff new-bot">
					<div class="pl20 pt25">
						<i class="iconfont icon-grade-alt pr10"></i>
						<div class="di-vm lh14">
							<p class="fz16 p-ellipsis">{:getCategory(getCategory($data[3][catid],parentid),'catname')}</p>
							<p class="fz14 new-list-txt p-ellipsis">{$data[3][catid]}{$data[3][data][title]}</p>
						</div>
					</div>
					<span></span>
				</li>
			</ul>
			<div class="dib new-img-box">
				<ul class="dib new-img ">
					<li>
						<a href="{$data[0][data][url]}">
                                                    <img src="{$data[0][data][thumb]}" alt="{$data[0][data][thumb]}" />
							<p class="cff plr25 fz14 p-ellipsis">{$data[0][data][title]}</p>
						</a>
					</li>
					<li>
						<a href="{$data[1][data][url]}"><img src="{$data[1][data][thumb]}" alt="{$data[1][data][title]}" /></a>
						<p class="cff plr25 fz14 p-ellipsis">{$data[1][data][title]}</p>
					</li>
					<li>
						<a href="{$data[2][data][url]}"><img src="{$data[2][data][thumb]}" alt="{$data[2][data][title]}" /></a>
						<p class="cff plr25 fz14 p-ellipsis">{$data[2][data][title]}</p>
					</li>
                                        <li>
						<a href="{$data[3][data][url]}"><img src="{$data[3][data][thumb]}" alt="{$data[3][data][title]}" /></a>
						<p class="cff plr25 fz14 p-ellipsis">{$data[3][data][title]}</p>
					</li>
				</ul>
			</div>
                           </position>
			<div class="fr new-info">
				<div class="pb10">
                                    <content action="category" catid="3"  order="listorder ASC" >
                                        <div >
                                            <span class="new-info-title active tx-c mr5">{:getCategory($data[0][catid],'catname')}</span>
                                            <span class="new-info-title tx-c mr5">{:getCategory($data[1][catid],'catname')}</span>
                                            <span class="new-info-title tx-c mr5">{:getCategory($data[2][catid],'catname')}</span>
                                            <span class="new-info-title tx-c">{:getCategory($data[3][catid],'catname')}</span>
                                        </div>
                                    </content>
                                        <div class="new-info-box active">
                                            <content action="hits" catid="$data[0][catid]"  order="weekviews DESC" num="1">
                                                <volist name="data" id="vo">
                                                    <p class="fz14 c4 0 tx-c p-ellipsis"><notempty  name="vo.thumb"><span class="c-orange">【图】</span></notempty >{$vo.title}</p>
                                                    <p class="fz18 c40 tx-c ptb10 p-ellipsis">{$vo.keywords}</p>
                                                    <div class="bsd pb10">
                                                        <p class="fz14 c8e p-ellipsis di-vm new-info-txt">{$vo.description}</p>
                                                        <a href="{$vo.url}" class="fz14 c-blue">[详情]</a>
                                                    </div>
                                                </volist>
                                            </content>
                                  
                             <content action="category" catid="3"  order="listorder ASC" >
						<ul class="new-info-cont pt10">
                                               
                                                      <content action="lists" catid="$data[0][catid]" order="id DESC" num="5" page="$page">
                                                           <volist name="data" id="vo">
							<li>
								<a href="{$vo.url}" class="p-ellipsis di-vm fz14 c59">&gt;<notempty  name="vo.thumb"><span class="c-orange">【图】</span></notempty >{$vo.title}</a>
								<span class="fr fz14 c8e">{$vo.updatetime|date="m-d",###}</span>
							</li>
                                                           </volist>
                                                      </content>
						</ul>
					</div>
                                 </content>
                                             <content action="category" catid="3"  order="listorder ASC" >
				<div class="new-info-box">
                                            <content action="hits" catid="$data[1][catid]"  order="weekviews DESC" num="1">
                                                <volist name="data" id="vo">
                                                    <p class="fz14 c4 0 tx-c p-ellipsis"><notempty  name="vo.thumb"><span class="c-orange">【图】</span></notempty >{$vo.title}</p>
                                                    <p class="fz18 c40 tx-c ptb10 p-ellipsis">{$vo.keywords}</p>
                                                    <div class="bsd pb10">
                                                        <p class="fz14 c8e p-ellipsis di-vm new-info-txt">{$vo.description}</p>
                                                        <a href="{$vo.url}" class="fz14 c-blue">[详情]</a>
                                                    </div>
                                                </volist>
                                            </content>
                                       </content>
                             <content action="category" catid="3"  order="listorder ASC" >
						<ul class="new-info-cont pt10">
                                                      <content action="lists" catid="$data[1][catid]" order="id DESC" num="5" page="$page">
                                                           <volist name="data" id="vo">
							<li>
								<a href="{$vo.url}" class="p-ellipsis di-vm fz14 c59">&gt;<notempty  name="vo.thumb"><span class="c-orange">【图】</span></notempty >{$vo.title}</a>
								<span class="fr fz14 c8e">{$vo.updatetime|date="m-d",###}</span>
							</li>
                                                           </volist>
                                                      </content>
						</ul>
					</div>
                                 </content>
				<div class="new-info-box">
                                     <content action="category" catid="3"  order="listorder ASC" >
                                            <content action="hits" catid="$data[2][catid]"  order="weekviews DESC" num="1">
                                                <volist name="data" id="vo">
                                                    <p class="fz14 c4 0 tx-c p-ellipsis"><notempty  name="vo.thumb"><span class="c-orange">【图】</span></notempty >{$vo.title}</p>
                                                    <p class="fz18 c40 tx-c ptb10 p-ellipsis">{$vo.keywords}</p>
                                                    <div class="bsd pb10">
                                                        <p class="fz14 c8e p-ellipsis di-vm new-info-txt">{$vo.description}</p>
                                                        <a href="{$vo.url}" class="fz14 c-blue">[详情]</a>
                                                    </div>
                                                </volist>
                                            </content>
                                     </content>
                             <content action="category" catid="3"  order="listorder ASC" >
						<ul class="new-info-cont pt10">
                                               
                                                      <content action="lists" catid="$data[2][catid]" order="id DESC" num="5" page="$page">
                                                           <volist name="data" id="vo">
							<li>
								<a href="{$vo.url}" class="p-ellipsis di-vm fz14 c59">&gt;<notempty  name="vo.thumb"><span class="c-orange">【图】</span></notempty >{$vo.title}</a>
								<span class="fr fz14 c8e">{$vo.updatetime|date="m-d",###}</span>
							</li>
                                                           </volist>
                                                      </content>
						</ul>
					</div>
                                 </content>
				<div class="new-info-box">
                                     <content action="category" catid="3"  order="listorder ASC" >
                                            <content action="hits" catid="$data[3][catid]"  order="weekviews DESC" num="1">
                                                <volist name="data" id="vo">
                                                    <p class="fz14 c4 0 tx-c p-ellipsis"><notempty  name="vo.thumb"><span class="c-orange">【图】</span></notempty >{$vo.title}</p>
                                                    <p class="fz18 c40 tx-c ptb10 p-ellipsis">{$vo.keywords}</p>
                                                    <div class="bsd pb10">
                                                        <p class="fz14 c8e p-ellipsis di-vm new-info-txt">{$vo.description}</p>
                                                        <a href="{$vo.url}" class="fz14 c-blue">[详情]</a>
                                                    </div>
                                                </volist>
                                            </content>
                                   </content>
                             <content action="category" catid="3"  order="listorder ASC" >
						<ul class="new-info-cont pt10">
                                               
                                                      <content action="lists" catid="$data[3][catid]" order="id DESC" num="5" page="$page">
                                                           <volist name="data" id="vo">
							<li>
								<a href="{$vo.url}" class="p-ellipsis di-vm fz14 c59">&gt;<notempty  name="vo.thumb"><span class="c-orange">【图】</span></notempty >{$vo.title}</a>
								<span class="fr fz14 c8e">{$vo.updatetime|date="m-d",###}</span>
							</li>
                                                           </volist>
                                                      </content>
						</ul>
					</div>
                                 </content>
				</div>
			</div>
                         
		</div>
		<!--news end-->
		<!--index-list-->
		<div class="warp">
			<ul class="mt25 mb5">
				<li class="di-vm index-list mr15">
					<a href="{:getCategory(48,'url')}">
						<i class="iconfont icon-xinxiang di-vm tx-c cff" style="background-image: url({$config_siteurl}statics/style1/images/index-list-bg.png);"></i>
						<div class="di-vm">
							<p class="p-ellipsis fz18 c40">领导信箱</p>
							<p class="p-ellipsis fz12 index-eng">Leader mailbox</p>
						</div>
					</a>
				</li>
				<li class="di-vm index-list mr15">
					<a href="{:getCategory(51,'url')}">
						<i class="iconfont icon-liuyan di-vm tx-c cff" style="background-image: url({$config_siteurl}statics/style1/images/index-list-bg.png);"></i>
						<div class="di-vm">
							<p class="p-ellipsis fz18 c40">公众留言</p>
							<p class="p-ellipsis fz12 index-eng">Public message</p>
						</div>
					</a>
				</li>
				<li class="di-vm index-list mr15">
					<a href="{:getCategory(52,'url')}">
						<i class="iconfont icon-106 di-vm tx-c cff" style="background-image: url({$config_siteurl}statics/style1/images/index-list-bg.png);"></i>
						<div class="di-vm">
							<p class="p-ellipsis fz18 c40">投诉举报</p>
							<p class="p-ellipsis fz12 index-eng">Complaints Report</p>
						</div>
					</a>
				</li>
				<li class="di-vm index-list mr15">
					<a href="{:getCategory(29,'url')}">
						<i class="iconfont icon-tousujianyi di-vm tx-c cff" style="background-image: url({$config_siteurl}statics/style1/images/index-list-bg.png);"></i>
						<div class="di-vm">
							<p class="p-ellipsis fz18 c40">建言献策</p>
							<p class="p-ellipsis fz12 index-eng">proposal</p>
						</div>
					</a>
				</li>
				<li class="di-vm index-list">
					<a href="{:getCategory(5,'url')}">
						<i class="iconfont icon-banshizhinan di-vm tx-c cff" style="background-image: url({$config_siteurl}statics/style1/images/index-list-bg.png);"></i>
						<div class="di-vm">
							<p class="p-ellipsis fz18 c40">办事指南</p>
							<p class="p-ellipsis fz12 index-eng">Service guide</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<!--index-list-end-->
		<!--index-info-->
		<div class="index-info warp clear">
			<div class="fl index-info-left  mt30">
				<!--公告-->
				<div class="info-notice di-vm mb10">
					<div class="info-title clear">
						<h2 class="di-vm fz18 c40">{:getCategory(3,'catname')}</h2>
						<a href="{:getCategory(3,'url')}" class="fr c40">+more</a>
					</div>
					<div class="bsd pb10">
                                            <content action="hits" catid="3" where="thumb != ''"  order="weekviews DESC" num="2">
                                                <volist name="data" id="vo">
                                                        <div class="info-img mt15 di-vm mr5">
                                                               <a href="{$vo.url}">
                                                            <div>
                                                                <img src="{$vo.thumb}" alt="{$vo.url}" />
                                                            </div>
                                                            <p class="di-vm p-ellipsis">{$vo.title}</p>
                                                              </a>
                                                        </div>
                                                </volist>
                                            </content>
					</div>
					<ul class="info-list-info">
                                            <content action="lists" catid="3" order="id DESC" num="4">
                                                  <volist name="data" id="vo">
						<li>
							<a href="{$vo.url}" class="p-ellipsis di-vm fz14 c59"><i class="iconfont icon-dangwu c-blue di-vm"></i><notempty  name="vo.thumb"><span class="c-orange">【图】</notempty ></span>{$vo.title}</a>
							<span class="fr fz14 c8e">{$vo.updatetime|date="m-d",###}</span>
						</li>
                                                  </volist>
                                              </content>
					</ul>
				</div>
				<!--公告结束-->
				<!--快速入口-->
				<div class="info-fast mt10">
					<div class="info-title clear">
						<h2 class="di-vm fz18 c40">快速入口</h2>
						<a href="" class="fr c40">+more</a>
					</div>
					<ul class="info-fast-box">
						<li class="di-vm tx-c c40 fz20 bgf4 mr5 mb10">
							<a href="" class="c40">
								<i class="iconfont icon-hudong"></i>
								<p class="di-vm p-ellipsis">民政互动</p>
							</a>
						</li>
						<li class="di-vm tx-c c40 fz20 bgf4 mb10">
							<a href="" class="c40">
								<i class="iconfont icon-shipin"></i>
								<p class="di-vm p-ellipsis">视频在线</p>
							</a>
						</li>
						<li class="di-vm tx-c c40 fz20 bgf4 mr5 mb10">
							<a href="" class="c40">
								<i class="iconfont icon-emergency"></i>
								<p class="di-vm p-ellipsis">应急管理</p>
							</a>
						</li>
						<li class="di-vm tx-c c40 fz20 bgf4 mb10">
							<a href="{:getCategory(9,'url')}" class="c40">
								<i class="iconfont icon-xiazai"></i>
								<p class="di-vm p-ellipsis">下载中心</p>
							</a>
						</li>
						<li class="di-vm tx-c c40 fz20 bgf4 mr5 mb10">
							<a href="{:getCategory(28,'url')}" class="c40">
								<i class="iconfont icon-xuexi"></i>
								<p class="di-vm p-ellipsis">学习园地</p>
							</a>
						</li>
						<li class="di-vm tx-c c40 fz20 bgf4 mb10">
							<a href="" class="c40">
								<i class="iconfont icon-diaocha"></i>
								<p class="di-vm p-ellipsis">网上调查</p>
							</a>
						</li>
					</ul>
				</div>
				<!--快速入口结束-->
			</div>
			<div class="fl index-info-center mt30">
				<!--办事导航-->
				<div class="info-guide di-vm mb10">
					<div class="info-title clear">
						<h2 class="di-vm fz18 c40">{:getCategory(5,'catname')}</h2>
						<a href="{:getCategory(5,'url')}" class="fr c40">+more</a>
					</div>
					<ul class="info-guide-info info-list-info mt15">
                                                 <content action="lists" catid="5" order="id DESC" num="4">
                                                  <volist name="data" id="vo">
						<li>
							<a href="{$vo.url}" class="p-ellipsis di-vm fz14 c59"><i class="di-vm"></i>{$vo.title}</a>
							<span class="fr fz14 c8e">{$vo.updatetime|date="m-d",###}</span>
						</li>
                                                  </volist>
                                                 </content>
					</ul>
					<ul class="info-guide-box">
						<li class="di-vm tx-c bgf4">
							<a href="{:getCategory(18,'url')}">
								<i class="iconfont icon-banshichu c-orange di-vm"></i>
								<p class="fz16 c40 p-ellipsis">办事程序</p>
							</a>
						</li>
						<li class="di-vm tx-c bgf4">
							<a href="">
								<i class="iconfont icon-biaoge- c-orange di-vm"></i>
								<p class="fz16 c40 p-ellipsis">表格下载</p>
							</a>
						</li>
						<li class="di-vm tx-c bgf4">
							<a href="">
								<i class="iconfont icon-zhuangtaichaxun c-orange di-vm"></i>
								<p class="fz16 c40 p-ellipsis">办件查询</p>
							</a>
						</li>
						<li class="di-vm tx-c bgf4 m0">
							<a href="{:getCategory(19,'url')}">
								<i class="iconfont icon-gongshigonggao c-orange di-vm"></i>
								<p class="fz16 c40 p-ellipsis">结果公示</p>
							</a>
						</li>
					</ul>
				</div>
				<!--办事导航结束-->
				<!--专题报道-->
				<div class="info-topic mt10">
					<div class="info-title clear">
						<h2 class="di-vm fz18 c40">{:getCategory(42,'catname')}</h2>
						<a href="{:getCategory(42,'url')}" class="fr c40">+more</a>
					</div>
					<ul class="info-topic-box">
                                               <content action="lists" catid="42" order="id DESC" num="6">
                                                  <volist name="data" id="vo">
						<li class="di-vm ">
							<a href="{$vo.url}">
								<img src="{$vo.thumb}" alt="{$vo.title}" />
							</a>
						</li>
                                                  </volist>
                                               </content>
					
					</ul>
				</div>
				<!--专题报道结束-->
			</div>
			<div class="fr index-info-right mt30">
				<!--政务公开-->
				<div class="info-gover di-vm mb10">
					<div class="info-title clear">
						<h2 class="di-vm fz18 c40">{:getCategory(4,'catname')}</h2>
						<a href="{:getCategory(4,'url')}" class="fr c40">+more</a>
					</div>
					<ul class="info-gover-box">
						<li class="di-vm bgf4">
							<a href="{:getCategory(16,'url')}">
								<div class="di-vm bg-1"></div>
								<p class="di-vm c40 f18 p-ellipsis pl5 ptb15">{:getCategory(16,'catname')}</p>
							</a>
						</li>
						<li class="di-vm bgf4">
							<a href="{:getCategory(17,'url')}">
								<div class="di-vm bg-1"></div>
								<p class="di-vm c40 f18 p-ellipsis pl5 ptb15">{:getCategory(17,'catname')}</p>
							</a>
						</li>
						<li class="di-vm bgf4">
							<a href="{:getCategory(31,'url')}">
								<div class="di-vm bg-1"></div>
								<p class="di-vm c40 f18 p-ellipsis pl5 ptb15">{:getCategory(31,'catname')}</p>
							</a>
						</li>
						<li class="di-vm bgf4">
							<a href="{:getCategory(32,'url')}">
								<div class="di-vm bg-1"></div>
								<p class="di-vm c40 f18 p-ellipsis pl5 ptb15">{:getCategory(32,'catname')}</p>
							</a>
						</li>
						<li class="di-vm bgf4">
							<a href="{:getCategory(33,'url')}">
								<div class="di-vm bg-1"></div>
								<p class="di-vm c40 f18 p-ellipsis pl5 ptb15">{:getCategory(33,'catname')}</p>
							</a>
						</li>
						<li class="di-vm bgf4">
							<a href="{:getCategory(34,'url')}">
								<div class="di-vm bg-1"></div>
								<p class="di-vm c40 f18 p-ellipsis pl5 ptb15">{:getCategory(34,'catname')}</p>
							</a>
						</li>
						<li class="di-vm bgf4">
							<a href="{:getCategory(35,'url')}">
								<div class="di-vm bg-1"></div>
								<p class="di-vm c40 f18 p-ellipsis pl5 ptb15">{:getCategory(35,'catname')}</p>
							</a>
						</li>
						<li class="di-vm bgf4">
							<a href="{:getCategory(36,'url')}">
								<div class="di-vm bg-1"></div>
								<p class="di-vm c40 f18 p-ellipsis pl5 ptb15">{:getCategory(36,'catname')}</p>
							</a>
						</li>
					</ul>
				</div>
				<!--政务公开结束-->
				<!--政策法规-->
				<div class="info-public mt10">
					<div class="info-title clear">
						<h2 class="di-vm fz18 c40"> {:getCategory(6,'catname')}</h2>
						<a href="{:getCategory(6,'url')}" class="fr c40">+more</a>
					</div>
					<ul class="info-guide-info info-list-info mt15">
                                             <content action="lists" catid="6" order="id DESC" num="8">
                                                  <volist name="data" id="vo">
						<li>
							<a href="{$vo.url}" class="p-ellipsis di-vm fz14 c59"><i class="di-vm"></i>{$vo.title}</a>
							<span class="fr fz14 c8e">{$vo.updatetime|date="m-d",###}</span>
						</li>
                                                  </volist>
                                             </content>
						
					</ul>
				</div>
				<!--政策法规结束-->
			</div>
		</div>
		<!--index-info end-->
		<!--index-more-->
		<div class="warp">
			<div class="info-title clear mt30">
				<h2 class="di-vm fz18 c40"> 友情链接</h2>
<!--				<a href="" class="fr c40">+more</a>-->
			</div>
			<div class="index-more">
				<select name="" class="mr30">
					<option value="">国家级网站</option>
                                       <option value="http://www.gzgov.gov.cn">贵州省人民政府</option>
				</select>
				<select name="" class="mr30">
					<option value="">省市级网站</option>
                                         <option value="http://www.mlr.gov.cn/">国土资源部</option>

                                <option value="http://www.sbsm.gov.cn/">国家测绘地理信息局</option>

                                <option value="http://www.soa.gov.cn/">国家海洋局</option>

                                <option value="http://www.shgtj.gov.cn/">上海房屋土地资源局</option>

                                <option value="http://www.cqgtfw.gov.cn">重庆市国土资源和房屋管理局</option>

                                <option value="http://www.hebgt.gov.cn/">河北省国土资源厅</option>

                                <option value="http://www.hnblr.gov.cn/">河南省国土资源厅</option>

                                <option value="http://www.ahgtt.gov.cn/">安徽省国土资源厅</option>

                                <option value="http://gtzyt.shaanxi.gov.cn/">陕西省国土资源厅</option>

                                <option value="http://www.yndlr.gov.cn/index.aspx">云南省国土资源厅</option>

                                <option value="http://www.jsmlr.gov.cn/">江苏省国土资源厅</option>

                                <option value="http://www.hblr.gov.cn/">湖北省国土资源厅</option>

                                <option value="http://www.zjdlr.gov.cn/">浙江省国土资源厅</option>

                                <option value="http://www.scdlr.gov.cn/sitefiles/services/cms/page.aspx?s=2">四川省国土资源厅</option>

                                <option value="http://www.sddlr.gov.cn/">山东省国土资源厅</option>

                                <option value="http://www.gtzy.hunan.gov.cn/">湖南省国土资源厅</option>

                                <option value="http://www.gdlr.gov.cn/">广东省国土资源厅</option>

                                <option value="http://www.gxdlr.gov.cn/">广西省国土资源厅</option>

                                <option value="http://www.fjgtzy.gov.cn/">福建省国土资源厅</option>

                                <option value="http://www.nmggtt.gov.cn/">内蒙古国土资源厅</option>

                                <option value="http://www.jxgtt.gov.cn/">江西国土资源厅</option>

                                <option value="http://www.nxgtt.gov.cn/">宁夏国土资源厅</option>

                                <option value="http://www.gtzyb.com/">中国国土资源报网</option>
				</select>
                            <select name="" class="mr30">
                                <option value="">地州市网站</option>
                               
                            </select>
				<select name="" class="mr30">
					<option value="">各县市区网站</option>
				</select>
				<select name="">
					<option value="">凯里市各部门区网站</option>
				</select>
			</div>		
		</div>
		<!--index-more end-->
	<template file="Content/footer.php"/>
        <div id="allmap"></div>
	</body>
</html>
