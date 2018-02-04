<!DOCTYPE html>
<html>
<head>
	<title>某某公司后台登录系统</title>
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

	<!--<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Simple Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->

</head>
<style>
	input[type="button"]{
	background-color:#005377;
	color:#fff;
	padding:11px;
	outline: none;
	border:none;
	font-size: 17px;
	width:50%;
	cursor:pointer;
	margin-top:5px;
		transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
}
</style>
<body>
    <h1>问卷调查后台登录系统</h1>
    <div class="container w3">
        <h2>现在登录</h2>
		<form action="#" method="post">
			<div class="username">
				<span class="username" style="height:19px">用户:</span>
				<input type="text" name="name" class="name" placeholder="" required="">
				<div class="clear"></div>
			</div>
			<div class="password-agileits">
				<span class="username"style="height:19px">密码:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clear"></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">记得我
　　
<br>
				<a href="#">忘记了密码</a><br>
			</div>
			<div class="login-w3">
					<input type="button" class="login" value="登录">
			</div>
			<div class="clear"></div>
		</form>
	</div>
	<div class="footer-w3l">
		<p> 某某公司后台登录系统</p>
	</div>
</body>
</html>
<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
<script>
	$('.login').click(function(){
		var name = $('.name').val();
		var pwd = $('.password').val();
		$.ajax({
			type:"post",
			url:"http://localhost/one/one/public/admin/login",
			data:{name:name,pwd:pwd},
			success:function(res){
				if(res==1){
					location.href="http://localhost/one/one/public/admin/show";
				}
			}
		})
	})
</script>