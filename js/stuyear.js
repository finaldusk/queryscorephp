function getstuyear()
{

var d = new Date();

var thisyear=parseInt(d.getFullYear());
var thismonth=parseInt(d.getMonth());

if (thismonth>9){
	thisyear++;	
}else{
	var objselect=document.getElementById('stumonth');
	objselect.value = 1; 
}
var objselect=document.getElementById('stuyear');
for (var i=0;i<4;i++){
	var s=(thisyear-1-i)+"-"+(thisyear-i);
	var v=s.substr(2,2); 
	
	var varItem = new Option(s, v); 
	objselect.options.add(varItem); 
}


}