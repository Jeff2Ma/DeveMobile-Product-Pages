<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>正在跳转中...</title>
</head>
<body>
	<p>DeveMobile 主题已经更新到2.x 版本，<span id="totalSecond">5</span>秒后为你重定向到新版主题使用文档...</p>
	
	<p>如果不能重定向，<a href="./docs">请点击这里</a></p>  
		<script language="javascript" type="text/javascript">   
		var second = totalSecond.innerText;   
		setInterval("redirect()", 1000);   
		function redirect(){   
		totalSecond.innerText=--second;   
		if(second<1) location.href='./docs';   
		}   
		</script>  
</body>
</html>