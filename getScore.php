<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<script src="./js/splitscore.js"></script>
<title>SYNU QueryScore</title>
</head>
<body onload="splitscore()">
<h1 id="stitle">暂时无结果，请稍后再试</h1>
</br></br>

<?php
$stuyear=$_POST["stuyear"].$_POST["stumonth"];
$id=$_POST["id"];


header("content-type:text/html;charset=utf-8");

//连接Webserver
$client = new SoapClient("http://210.30.208.140/ahxkp_cjcx_webserver.asmx?wsdl");

//预存参数
$param = array('Scan1'=>$stuyear,'Scan2'=>$id);

//发送请求
$p = $client->__soapCall('xscjcx',array('parameters' => $param));

$str= $p->xscjcxResult;

echo "<div class=hidden id=\"result\">". $str ."</div>";

/*
//获取标题
$title_at=strpos($str," ");
$score_title = substr($str,0,$title_at);
echo "<h1>";
echo $score_title;
echo "</h1></br>";

//去除标题
$secore = strstr($str," ");

//切割各科分数
$row=explode(',',$secore);
$secore_count=count($row);
?>
</br>
<div class=outarea>
<ul>
<?php
//输出
for ($i=0;$i<$secore_count;$i++){
	echo "<li>";
	echo $row[$i];
	echo "</li>";
}
echo"</ul>";
*/
?>
<div id="score" class=outarea>
<ul id="uresult">
</ul>
</div>


</body>