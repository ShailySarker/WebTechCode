function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var e_name = getElement("name");
	var e_username = getElement("username");
	var e_password = getElement("password");
	var e_email = getElement("email");
	var e_phone = getElement("phone");
	
	var err_name = getElement("err_name");
	var err_username = getElement("err_username");
	var err_password = getElement("err_password");
	var err_email = getElement("err_email");
	var err_phone = getElement("err_phone");
	
	if(e_name.value == ""){
		hasErr= true;
		err_name.innerHTML = "Name Required";
		
	}
	
	if(e_username.value == ""){
		hasErr= true;
		err_username.innerHTML = "Username Required";
		
	}
	
	if(e_password.value == ""){
		hasErr= true;
		err_password.innerHTML = "Password Required";
		
	}
	
	if(e_email.value == ""){
		hasErr= true;
		err_email.innerHTML = "Email Required";
		
	}
	
	
	if(e_phone.value == ""){
		hasErr= true;
		err_phone.innerHTML = "Phone number Required";
		
	}
	return !hasErr;

}
function refresh(){
	var err_name = getElement("err_name");
	var err_username = getElement("err_username");
	var e_password = getElement("password");
	var err_email = getElement("err_email");
	var err_phone = getElement("err_phone");
	
	err_name.innerHTML = "";
	err_username.innerHTML = "";
	err_password.innerHTML = "";
	err_email.innerHTML = "";
	err_phone.innerHTML = "";
	
}