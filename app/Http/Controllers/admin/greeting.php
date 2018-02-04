<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title> 
</head>
<body>
<center>
	<table border="1">
			<tr>
				<td>用户名</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="pwd" id="pwd"></td>
			</tr>
			<tr>
				<td><input type="submit" id="sub" value="登录"></td>
			</tr>
	</table>
</center>	
</body>
</html>
<script src="./js/jquery-3.2.1.min.js"></script>
<script>
	$('#sub').click(function(){
		var name= $('#name').val();
		var pwd = $('#pwd').val();
		$.ajax({
			type:"post",
			data:{name:name,pwd:pwd},
			url:"http://localhost/laveral/blog/public/index.php/user/form",
			success:function(reg){
				console.log(reg);
			}
		})
	})
</script>