function mian(urlAdress,select){
	//		提交
		var path = "/public/static/home/images/img/bind-fail.png";
		$(".btn-default").click(function(){
			var Input = $(".register input");
			var Info = [];
			var repwdI = $(" input[ name='repwd' ] ");
			var phone = $(" input[ name='phone' ] ").val();
			var name = $(" input[ name='name' ] ").val();
			var verifyPass = $(" input[ name='verifyPass']").val();
			var paswd = $(" input[ name='password']").val();
			var repwd = $(" input[ name='repwd' ] ").val();
			var path = "/public/static/home/images/img/bind-fail.png";
			Input.each(function(index){
				if(!$(this).val().length){
					console.log($(this))
					$(this).siblings("i").css("color","red");
				}else{
					$(this).siblings("i").css("color","#026ced");
					Info.push($(this).val());
				}
			})
			if(paswd == repwd){
				if(Info.length == 5){
				var data = {"phone":phone,"verifyPass":verifyPass,"name":name,'password':paswd}
				var url = urlAdress;
				$.post(url,data,function(res){
						dialog(res);
				})	
				}else{
					return;
				}
			}else{
				repwdI.siblings('i').css("color","red");
			}
			if(select){
				var verifyPass = $(" input[ name='verifyPass']").val();
				var paswd = $(" input[ name='password']").val();
				var data = {"verifyPass":verifyPass,'password':paswd}
				var url = urlAdress;
				if(paswd && verifyPass){
					$.post(url,data,function(res){
						dialog(res);
				})
				}else{
					return;
				}			
			}
		})
		
//		弹框
		function dialog(res){
//			var path = "/public/static/home/images/img/bind-fail.png";
			$('.dialog-Txt').text(res.message);	
			$(".legal-dialog").addClass("active");
			$(".dialog-con img").attr('src',path);
			$(".dailog").click(function(){
				alert(res.url)
				if(res.status == 200){			
					$(this).attr("href",res.url);
				}else{		
					$(this).parents(".dialog-box").removeClass("active");
					$(this).attr("href","javascript:void(0);"); 
					return false;
				}		
			})
		}
		
		$(".dialog-cancle,.dialog-sure,.icon-cha").on("click", function() {
			$(this).parents(".dialog-box").removeClass("active");
		});
		
//		验证码
		CodeFn();
		function CodeFn() {
			var onOff = true;
			var timer;
			var _this;
			var Num = 60;
			$(".code-btn").on("click", function() {
				_this = $(this);
				if(onOff) {
					onOff = false;
					var phone = $(" input[ name='phone' ] ").val();
				    var name = $(" input[ name='name' ] ").val();
				    var data = {"phone":phone,"name":name};
				    var url = "http://kyj.v2.derenhe.com/home/login/get_code";
                    var that= this;
                    timer = setInterval(function() {
						Num--;
						_this.text('重新获取' + Num + '"');
						onOff = false;
						if(Num == 0) {
							codeReduction();
						}
					}, 1000);
					
						_this.prop('disabled',true);
						_this.removeClass("btn-orange");
						_this.addClass("btn-grey");
				    $.post(url,data, function(res){
                        if(res == "发送成功"){
	                         alert(res);   
	                     }else{
                      		alert(res);
                      		clearInterval(timer);
                      		codeReduction();
                        }
			        });
				}
			});
			//验证码还原
			function codeReduction() {
				clearInterval(timer);
				_this.text("获取验证码");
				_this.prop('disabled',false);
				_this.removeClass("btn-grey");
				_this.addClass("btn-orange");
				onOff = true;
				Num = 60
			}
		}
}
