function getElement(id){
	return document.getElementById(id);
}
function validate2(){
	refresh();
	var hasErr=false;
	var e_username = getElement("username");
	var e_password = getElement("password");
	
	
	var err_username = getElement("err_username");
	var err_password = getElement("err_password");
	
	
	
	if(e_username.value == ""){
		hasErr= true;
		err_username.innerHTML = "Username Required";
		
	}
	
	if(e_password.value == ""){
		hasErr= true;
		err_password.innerHTML = "Password Required";
		
	}
	if(!hasErr){
		return true;
	}
	else{
		return false;}
	

	

}
function refresh(){
	
	var err_username = getElement("err_username");
	var e_password = getElement("password");
	
	
	err_username.innerHTML = "";
	err_password.innerHTML = "";
	
	
}