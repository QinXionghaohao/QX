<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style type="text/css">
 
html {
    width: 100%;
    height: 100%;
    overflow: hidden;
    font-style: sans-serif;
}
	
body {
    width: 100%;
    height: 100%;
    font-family: 'Open Sans', sans-serif;
    margin: 0;
    background-color: lightblue;
}
	
#login {
position: absolute;
top: 50%;
left: 50%;
margin: -150px 0 0 -150px;
width: 300px;
height: 300px;
}
	
#login h1 {
color: #fff;
text-shadow: 0 0 10px;
letter-spacing: 1px;
text-align: center;
}
	
h1 {
    font-size: 2em;
    margin: 0.67em 0;
}
	
input {
    width: 278px;
    height: 18px;
    margin-bottom: 15px;
	outline: none; 
    padding: 10px;
    font-size: 13px;
    color: #fff;
    text-shadow: 1px 1px 1px;
    border-top: 1px solid #312E3D;
    border-left: 1px solid #312E3D;
    border-right: 1px solid #312E3D;
    border-bottom: 1px solid #56536A;
    border-radius: 4px;
    background-color: skyblue;
}
	
.but {
    width: 300px;
    min-height: 20px;
    display: block;
    background-color: #4a77d4;
    border: 1px solid #3762bc;
    color: #fff;
    padding: 9px 14px;
    font-size: 15px;
    line-height: normal;
    border-radius: 5px;
    margin: 0;
}
.yanzhen{
    width: 40px;
    height: 10px;
    text-shadow: 1px 1px 1px;
    border-top: 1px solid #312E3D;
    border-left: 1px solid #312E3D;
    border-right: 1px solid #312E3D;
    border-bottom: 1px solid #56536A;
    border-radius: 4px;
}
.size{
    font-size: 20px;
    color: #fff;
}
#img{
vertical-align: middle;

}
a{
    text-decoration: none;
    color: black;
    position: relative;
    top: 10px;
    	
}
</style>
</head>
<body>
<div id="login">
<h1>register</h1>
<form method="post" action="../index.php">
	<input type="hidden" name="class" value="User"/>
	<input type="hidden" name="action" value="register"/>
    <input type="text" required="required" placeholder="用户名" name="username"></input>
    <input type="password" required="required" placeholder="密码" name="password" id="mm"></input>
    <input type="password" required="required" placeholder="确认密码" name="pass" id="mm2"></input>
    <span class="size">验证码：</span><input type="text" required="required" name="w" class="yanzhen" id="yan"></input>
    <img id="img" src="http://localhost/XM/YZM/YZM.php"/>
    <a href="javascript:void(0)" id="a">换一张</a>
    <button class="but">注册</button>
</form>
</div>
</body>
<script type="text/javascript" src="jquery-1.7.1.js"></script>
<script type="text/javascript">
	$(function(){
		var a = document.getElementById("a");
		var img = document.getElementById("img");
			a.onclick = function(){
			    img.src = "http://localhost/XM/YZM/YZM.php?a=<?php echo round(1,100)?>";
			}
			img.onclick = function(){
			    img.src = "http://localhost/XM/YZM/YZM.php?a=<?php echo round(1,100)?>";
			}
			
			$("#mm2").blur(function(){
			var passworda = document.getElementById("mm").value;
			var passwordb = document.getElementById("mm2").value;
		   if(passworda!=passwordb){
		    alert("两次输入的密码不一致");
		     return false;
			}else{
			 return true;
			}
			})
			
			$("#yan").blur(function(){
				var but = $(".yanzhen").val();
				$.ajax({
					type:"post",
					data:{"but":but},
					url:"http://localhost/XM/html/yz.php",	
					success:function(res){
						if(res){
							
						}else{
							alert("验证码错误");
						}
					}
				});
			})
	})		
</script>
</html>
