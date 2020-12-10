function getElement(id){
	return document.getElementById(id);
}


function validate1(){
	
	
	refresh();
	
	var hasErr=false;
	var name = getElement("name");
	var username = getElement("username");
	var password = getElement("password");
	var email = getElement("email");
	
	
	var err_name = getElement("err_name");
	var err_username = getElement("err_username");
	var err_password = getElement("err_password");
	var err_email = getElement("err_email");
	
	
	
	//name validation
	if (isempty(name)) {
        hasErr = true;
        err_name.innerHTML = "*Name can not be empty";
    } 
	else if (checkNumberContains(name)) {
        hasError = true;
        err_name.innerHTML = "*No number is allowed";
    }
	
	
	// username validation
	if (isempty(username)) {
        hasError = true;
        err_username.innerHTML = "*Username can not be empty";
    
    } else if (username.search(" ") > -1) {
        hasError = true;
        err_username.innerHTML = "*No spaces is allowed in Username";
    }
	else if (!username.length =6) {
        hasError = true;
        err_username.innerHTML = "*Username must be 6 characters long";
	}
		
	
	
	//password validation
	if (isempty(password)) {
        hasError = true;
        err_password.innerHTML = "*Password can not be empty";
    } else if (!password.length=8) {
        hasError = true;
        err_password.innerHTML = "*Password must be 8 characters long";
    }
	
	
	//email validation
	if (isempty(email)) {
        hasError = true;
        err_email.innerHTML = "*Email can not be empty";
    }
	else if (email.search("@") == -1) {
        hasError = true;
        err_email.innerHTML = "*No @ at email length";
    }
	
	
	
	
function refresh(){
	var err_name = getElement("err_name");
	var err_username = getElement("err_username");
	var err_password = getElement("err_password");
	var err_email = getElement("err_email");
	
	
	err_name.innerHTML = "";
	err_username.innerHTML = "";
	err_password.innerHTML = "";
	err_email.innerHTML = "";
	
	
}

//Empty string check

function isempty(str) {
    if (str == "") {
        return true;
    }
    return false;
}


//Check Number

function checkNumberContains(str) {
    for (let index = 0; index < str.length; index++) {
        let a = str[index];
        if (a == "0" || a == "1" || a == "2" || a == "3" || a == "4" || a == "5" || a == "6" || a == "7" || a == "8" || a == "9") {
            
			return true;
        }
    }

return false;
}
 
