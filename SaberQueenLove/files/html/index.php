<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SABER</title>
     
 <!--全局样式-->
<style>
body
{
background:url(https://s1.ax1x.com/2020/08/28/dIQV2t.jpg);  
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

<br><br><br><br>
<h1 class="text-center" style="text-shadow: 5px 5px 5px white;">
<em>想得到saber的爱吗？那就来和她谈谈吧</em></h1>
<br><br>
<form method="get">
     <input type="text" name="inject" value="1" 
    style="border:2px solid #a1a1a1;
	  padding:10px 40px; 
	  width:200px;
	  background:#dddddd;
	  boder-radius:50px;
	  overflow:auto;">
    <br>
    <input type="submit"
    style="background-color: white; 
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  border-radius: 12px;
  -moz-transform:rotateX(360deg);">
</form>

<pre>

<?php
function waf1($inject) {
    preg_match("/select|update|delete|drop|insert|where|\./i",$inject) && die('无路赛！preg_match("/select|update|delete|drop|insert|where|\./i",$inject);');
}

function waf2($inject) {
    strstr($inject, "set") && strstr($inject, "prepare") && die('可恶！strstr($inject, "set") && strstr($inject, "prepare")');
}

if(isset($_GET['inject'])) {
    $id = $_GET['inject'];
    waf1($id);
    waf2($id);
    $mysqli = new mysqli("127.0.0.1","root","root","supersqli");
    //多条sql语句
    $sql = "select * from `word` where id = '$id';";

    $res = $mysqli->multi_query($sql);

    if ($res){//使用multi_query()执行一条或多条sql语句
      do{
        if ($rs = $mysqli->store_result()){//store_result()方法获取第一条sql语句查询结果
          while ($row = $rs->fetch_row()){
            var_dump($row);
            echo "<br>";
          }
          $rs->Close(); //关闭结果集
          if ($mysqli->more_results()){  //判断是否还有更多结果集
            echo "<hr>";
          }
        }
      }while($mysqli->next_result()); //next_result()方法获取下一结果集，返回bool值
    } else {
      echo "error ".$mysqli->errno." : ".$mysqli->error;
    }
    $mysqli->close();  //关闭数据库连接
}


?>
</pre>

</body>

</html>
