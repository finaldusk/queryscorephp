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



<script type="text/javascript">
    (function(win,doc){
        var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
        if (!win.alimamatk_show) {
            s.charset = "gbk";
            s.async = true;
            s.src = "http://a.alimama.cn/tkapi.js";
            h.insertBefore(s, h.firstChild);
        };
        var o = {
            pid: "mm_34249687_3444417_13656743",/*推广单元ID，用于区分不同的推广渠道*/
            appkey: "",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/
            unid: "",/*自定义统计字段*/
            type: "click" /* click 组件的入口标志 （使用click组件必设）*/
        };
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window,document);
</script>

<div class=outarea>
<a data-type="3" data-tmpl="250x250" data-tmplid="185" data-rd="2" data-style="2" data-border="1" href="#"></a>
</div>

</body>