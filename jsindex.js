
function getStyle(obj,name){
	if(obj.currentStyle){
		return obj.currentStyle[name];
	}else{
		return getComputedStyle(obj,false)[name];
	}
}
function move(obj,json,options){
	options = options || {};
	options.duration = options.duration || 500;
	options.type = options.type || 'ease-out';
	var timer = null;
	var start = {};
	var dis = {};
	for(var name in json){
		start[name] = parseFloat(getStyle(obj,name)); //寮€濮嬬殑鍊�
		dis[name] = json[name] - start[name];  //鎬昏窛绂�		
	} 
	var count = Math.floor(options.duration/30);
	var n = 0;
	clearInterval(obj.timer);
	obj.timer = setInterval(function(){
		n++;
		for(var name in json){
			switch(options.type){
				case 'linear':
					var a = n/count;
					var cur = start[name]+dis[name]*a;
					break;
				case 'ease-in':
					var a = n/count;
					var cur = start[name]+dis[name]*a*a*a;
					break;
				case 'ease-out':
					var a = 1-(n/count);
					var cur = start[name]+dis[name]*(1-a*a*a);
					break;
			}
			if(name == 'opacity'){
				obj.style.opacity = cur;
				obj.style.filter = 'alpha(opacity="cur*100")';
			}else{
				obj.style[name] = cur+'px';
			}
		}
		if(n==count){
			clearInterval(obj.timer);
			options.complete && options.complete.apply(obj,arguments);
		}
	},30)
	
}
window.onload = function(){
	//JS实现选项卡切换
	
var myTab = document.getElementById("tab");    //整个div
var myUl = myTab.getElementsByTagName("ul")[0];//一个节点
var myLi = myUl.getElementsByTagName("li");    //数组
var myDiv = myTab.getElementsByTagName("div"); //数组

for(var i = 0; i<myLi.length;i++){
   myLi[i].index = i;
   myLi[i].onclick = function(){
       for(var j = 0; j < myLi.length; j++){
           myLi[j].className="off";
           myDiv[j].className = "hide";
       }
       this.className = "on";
       myDiv[this.index].className = "show";
   }
 }

	//part1	
	//part4
	//part5
    //part9
    var oPre = document.getElementById('pre');
	var oNext = document.getElementById('next');
	var oPosBox = document.getElementById('posBox');
	var iNow = 0;
	oPre.onclick = function(){		
		iNow++;
		if(iNow == 3){
			iNow=0;
			move(oPosBox,{left:-256*iNow});
		}else if(iNow<0){
			move(oPosBox,{left:256*iNow});
		}else if(iNow>=0){
			move(oPosBox,{left:-256*iNow});
		}
	};
	oNext.onclick = function(){
		iNow--;
		if(iNow == -3){
			iNow=0;
			move(oPosBox,{left:256*iNow});
		}else if(iNow<=0){
			move(oPosBox,{left:256*iNow});
		}else if(iNow>0){
			move(oPosBox,{left:-256*iNow});
		}
	};	
	
	
	
};
