validateName=function(){
	var name=document.getElementById("name").value;
	hideTooltips("name");
	if(name=="")  { 
		showTooltip("name");
		addError("name");
		return;	
	}
	else{
		for(i=0;i<name.length;i++){
			var c=name[i];
			if( !((c>='a' && c<='z') ||(c>='A' && c<='Z') || (c==' ' || c=='.')) ){
				showTooltip("name");
				addError("name");
				return;
			}
		}
	}
		approve("name");
}

validateDOB=function(){
	var dob=document.getElementById("dateofbirth").value;
	hideTooltips("dateofbirth");
	if(dob=="")  { 
		showTooltip("dateofbirth");
		addError("dateofbirth");
		return;	
	}
	else {
		var a=dob.split("/");
		if(a.length!=3){
			showTooltip("dateofbirth");
			addError("dateofbirth");
			return;
		}
		for(i=0;i<3;i++){
			if(isNaN(parseInt(a[i]))){
				showTooltip("dateofbirth");
				addError("dateofbirth");			
				return;
			}
			else a[i]=parseInt(a[i]);
		}
		var idiotcheck=(a[0]>31)||(a[1]>12)||(a[2]>2016)||(a[0]<1||a[1]<1||a[2]<1);
		var thirtyonecheck=(a[0]==31 && (a[1]!=1 && a[1]!=[3] && a[1]!=5 && a[1]!=7 && a[1]!=8 && a[1]!=10 && a[1] !=12));
		var thirtycheck=(a[0]==30 && (a[1]==2));
		var twentyninecheck=(a[0]==29 && ((a[1]==2)&&(a[2]%4!=0)));
		if( thirtyonecheck || thirtycheck || twentyninecheck || idiotcheck ){
			showTooltip("dateofbirth");
			addError("dateofbirth");
			return;
		}
		document.getElementById("dateofbirth").value=a[0]+"/"+a[1]+"/"+a[2];
		approve("dateofbirth");
	}

}

validatePhone=function(){
	var pno=document.getElementById("phonenumber").value;
	hideTooltips("phonenumber");
	if(isNaN(parseInt(pno)) || pno.length !=10){
		showTooltip("phonenumber");
		addError("phonenumber");
	}
	else approve("phonenumber");
}

validateCollege=function(){
var college=document.getElementById("college").value;
	hideTooltips("college");
	if(college=="")  { 
		showTooltip("college");
		addError("college");
		return;
	}
	approve("college");
}

validateEmail=function(){
	hideTooltips("email");
	var email=document.getElementById("email").value;
	if(email=="") {
		showTooltip("email");
		addError("email");
		return;
	}
	var a=email.split("@");
	if(a.length!=2 || (a[1].indexOf(".")==-1 || a[0]=="")){
		showTooltip("email");
		addError("email");
		return;
	}
	else{
		if(a[1]=="spambot.org" || a[1]=="mailnator.com"){
			showTooltip("emailbadservice");
			addError("email");
			return;
		}
		else approve("email");
	}
}

validatePassword=function(){
	hideTooltips("password");
	var pass=document.getElementById("password").value;
	var repass=document.getElementById("repassword").value;
	if(pass.length<5 || pass.length >=15){
		showTooltip("password");
		addError("password");
		addError("repassword");
		return;
	}
	else if(pass!=repass){
		showTooltip("passwordmatch");
		addError("password");
		addError("repassword");
		return;
	}
	else{
		for(i=0;i<pass.length;i++){
			var c=pass[i];
			if( !((c>='a' && c<='z') ||(c>='A' && c<='Z') || (c>='0' && c<='9') || (c=='_') )){
				showTooltip("password");
				addError("password");
				addError("repassword");
				return;
			}
		}
		approve("password");
		approve("repassword");
	}
}


addError=function(id){
	var element=document.getElementById(id);
	if(element.className.indexOf("error")==-1){
		element.className=element.className.replace("validated","");
		if(element.className!="") element.className+=" error";
		else element.className="error";
		document.getElementById("signupbutton").value="Errors";
		document.getElementById("signupbutton").disabled=true;
	}
}

clearError=function(id){
	var element=document.getElementById(id);
	if(element.className.indexOf("error")!=-1){
		element.className=element.className.replace(" error","");
		if(element.className=="error") element.className="";
	}
}

approve=function(id){
	clearError(id);
	var element=document.getElementById(id);
	if(element.className.indexOf("validated")==-1){
		if(element.className!="") element.className+=" validated";
		else element.className="validated";
		if(document.getElementsByClassName("error").length==0){
			document.getElementById("signupbutton").value="Sign Up!";
			document.getElementById("signupbutton").disabled=false;
		}
	}
}

showTooltip=function(id){
	var element=document.getElementById(id+"error");
	if(element.className.indexOf("show")==-1)
		element.className="tooltip show";
}

hideTooltips=function(id){
	var elements=document.getElementsByClassName("show");
	for(i=0;i<elements.length;i++){
		if(elements[i].getAttribute('id').indexOf(id)!=-1){
			elements[i].className="tooltip hidden";
		}
	}
}
