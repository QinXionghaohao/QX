<?php ?>
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
      </style>
</head>  
<body>  
    <div id="login">  
        <h1>Login</h1>  
        <form action="../index.php" method="post">
        	<input type="hidden" name="class" value="User"/>
			<input type="hidden" name="action" value="login"/>  
            <input type="text" required="required" placeholder="用户名" name="username"></input>  
            <input type="password" required="required" placeholder="密码" name="password"></input>
        	<button class="but" type="submit">登陆</button>  
        </form>  
    </div>
    <script type="text/javascript" src="jquery-1.7.1.js"></script>
   	<script type="text/javascript">
		
   	</script>
</body>  
