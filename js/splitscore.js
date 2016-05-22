function splitscore(){
	var str=document.getElementById('result').innerHTML; 
	console.log(str);
	document.getElementById("result").innerHTML ="";
	var titleat=str.indexOf(" ");
	var stitle=str.substr(0,titleat);
	document.getElementById("stitle").innerHTML = stitle;
	str=str.substring(titleat);
	var scorelist=str.split(",");
	
	var ul = document.getElementById("uresult");
	
	for(var i=0;i<scorelist.length;i++){
		//添加 li
　　　　var li = document.createElement("li");
　　　　
　　　　li.innerHTML = scorelist[i];
　　　　ul.appendChild(li);
	}
	

　　　　
	
}