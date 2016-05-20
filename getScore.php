<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />

<title>SYNU QueryScore</title>
</head>
<body>





<?php
$stuyear=substr($_POST["stuyear"],2,2).$_POST["stumonth"];
$id=$_POST["id"];



header("content-type:text/html;charset=utf-8");

//连接Webserver
$client = new SoapClient("http://210.30.208.140/ahxkp_cjcx_webserver.asmx?wsdl");

//预存参数
$param = array('Scan1'=>$stuyear,'Scan2'=>$id);

//发送请求
$p = $client->__soapCall('xscjcx',array('parameters' => $param));

$str= $p->xscjcxResult;

//$str="您的2015-2016学年1学期的考试成绩为 大学外语专1: 73分,数据结构: 84分,职业发展与就业指导上: 合格,大学生安全教育: 合格,大学生心理健康教育: 合格,WINDOWS程序设计: 85分,大学生军事理论教程: 合格,面向对象的程序设计C++: 85分,计算机系统结构: 优秀,科技文献检索与写作: 优秀,算法分析与设计: 优秀,WEB程序设计: 94分.";

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

?>
</ul>
</div>


</body>