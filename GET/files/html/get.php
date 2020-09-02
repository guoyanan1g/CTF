<?php
include 'flag.php';
echo "提示：提交的是a";
echo "<br />";
echo "不知道要提交什么？再回去看看吧";
@$a=$_GET['a'];
if($a==190756)
	echo($flag);
?>