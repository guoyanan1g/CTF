<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>guess a number</title>
     
 <!--全局样式-->
<style>
body
{
background:url(https://s1.ax1x.com/2020/05/23/YxKTXj.jpg);  
  position:fixed;
  top: 0;
  left: 0;                     
  width:100%;
  height:100%;
  min-width: 1000px;
  z-index:-10;                 
  zoom: 1;
  background-color: #fff;
  background-repeat: no-repeat;
  background-size: cover;      
  -webkit-background-size: cover;  
  -o-background-size: cover;       
  background-position: center 0;   
}

 
.divForm{
position: absolute;
width: 300px;
height: 200px;
text-align: center;
top: 40%;
left: 50%;
margin-top: -200px;      
margin-left: -150px;
}
</style>

</head>
<body>
<script type="text/javascript">
function check(){                  
while(1)
{
	var ges=document.getElementById('guess').value;
	if(isNaN(ges))
		{alert('想骗我？不存在的');break;}
	else if(ges<190756)
		{alert('输入小了，再试试');break}
	else if(ges>190756)
		{alert('输入大了，再试试');break;}
	else
		{alert('Right!!!,现在把这个数字提交给我吧');
		break;}
}
}
</script>
//get.php
<div class="divForm">
<br><br><br><br>
<h1 class="text-center" style="text-shadow: 5px 5px 5px white;">
<em>来猜猜看吧！</em></h1>
<br><br><br><br>
<input id="guess" type="text" 
style="border:2px solid #a1a1a1;
	padding:10px 40px; 
	width:200px;
	background:#dddddd;
	boder-radius:50px;
	overflow:auto;">
<br><br><br><br>
<input type="button" style="background-color: white; 
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
border-radius: 12px;
-moz-transform:rotateX(360deg);"
onclick="check()" value="submit">             

<br><br><br><br>
</form>
</div>
</body>
</html>