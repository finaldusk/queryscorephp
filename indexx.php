<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />

<title>SYNU QueryScore</title>
</head>
<body>
<h1>成绩查询</h1>
</br>
</br>
<div class=outarea>
<div class=inarea >

</br>
<form action="getScore.php" method="post">
学号: <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d.]/g,''))" name="id"></br></br>
学年: <select name="stuyear">
<?php
$thisyear=date("Y");
$thismonth=date("n");
if ($thismonth>9){
	$thisyear++;
}
for($index=0;$index<4;$index++){
	
	$xn=($thisyear-$index-1)."-".($thisyear-$index);
	echo "<option value=\"".$xn."\">".$xn."</option>";
}

?>
</select>
学期:<select name="stumonth">
<option value="0">1</option>
<option value="1">2</option>
<option value="2">3</option>
</select>
</div>

<p text-align=left><input type="submit"></p>
</form>

</div>


</br>


<div class=outarea>
© 2016 <a href="http://www.wangxinlei.cn" title="最後的黄昏">最後的黄昏</a> <a href="http://www.miitbeian.gov.cn/" title="辽ICP备15000815号-2">辽ICP备15000815号-2</a>
</div>

</body>