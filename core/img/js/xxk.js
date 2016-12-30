function secBoard(td,tr,m,n,sec1,sec2) //m是选项卡数量,n是当前选项卡序号
{
	//更新选项卡样式
	for(i=0;i<m;i++) { 
	if (i==n) {
		document.getElementById(td+n).className=sec2;
	} else {
		document.getElementById(td+i).className=sec1;}
}

//隐藏和显示行
for(i=0;i<m;i++) {
	if (i==n) {
		document.getElementById(tr+n).style.display="";
	} else {
		document.getElementById(tr+i).style.display="none";}
	}
}
function secBoard_more(td,tr,m,n,sec1,sec2,A,URL) {//m是选项卡数量,n是当前选项卡序号
	if(URL != ""){
		URL_A = URL.split("|")
	}
	//更新选项卡样式
	for(i=0;i<m;i++) { 
		if (i==n) {
			document.getElementById(td+n).className=sec2;
			if(URL != ""){
				document.getElementById(A).href=URL_A[i];
			}
		} else {
			document.getElementById(td+i).className=sec1;
		}
	}
	
	//隐藏和显示行
	for(i=0;i<m;i++) {
		if (i==n) {
			document.getElementById(tr+n).style.display="";
		} else {
			document.getElementById(tr+i).style.display="none";
		}
	}
}
function secBoard_more_01(td,tr,m,n,sec1,sec2,A,URL) {//m是选项卡数量,n是当前选项卡序号
	if(URL != ""){
		URL_A = URL.split("|")
	}
	//更新选项卡样式
	for(i=0;i<m;i++) { 
		if (i==n) {
			document.getElementById(td+n).className="sec"+(i+3);
			if(URL != ""){
				document.getElementById(A).href=URL_A[i];
			}
		} else {
				if(i==0||i==1||i==2){
					document.getElementById(td+i).className="sec"+i;
					}
				else{
					document.getElementById(td+i).className=sec0;
					}
		}
	}
	
	//隐藏和显示行
	for(i=0;i<m;i++) {
		if (i==n) {
			document.getElementById(tr+n).style.display="";
		} else {
			document.getElementById(tr+i).style.display="none";
		}
	}
}

function Show(divname,sum,id) {
	for(var i=0;i<sum;i++) {
		if(i==id){ 
		  if (document.all('nav' + id).style.display == 'none')
			  {
					document.all('nav' + id).style.display = 'block'; 
					document.getElementById(divname+id).className="active"
			   }
		   else{
		  			 //document.all('nav' + id).style.display = 'none'; 
					// document.getElementById(divname+id).className="";
		         }
		}
		else{
			document.all('nav' + i).style.display = 'none';
			document.getElementById(divname+i).className="";
		}
	}
}

function Show_fw(divname,sum,id) {
	for(var i=0;i<sum;i++) {
		if(i==id){ 
		  if (document.all('nava' + id).style.display == 'none')
			  {
					document.all('nava' + id).style.display = 'block'; 
					document.getElementById(divname+id).className="active"
			   }
		   else{
		  			 //document.all('nav' + id).style.display = 'none'; 
					// document.getElementById(divname+id).className="";
		         }
		}
		else{
			document.all('nava' + i).style.display = 'none';
			document.getElementById(divname+i).className="";
		}
	}
}
