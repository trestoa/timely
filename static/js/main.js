function check_signup(){
	var username = $('#signin-username').val();
	var password = $('#signin-password').val();
	var repassword = $('#signin-repassword').val();
	var username_regex = /^\w{5,30}$/;
	var password_regex = /^(?=.*\w)(?=.*\W).{5,30}$/;
	if(!username.match(username_regex)){
		alert("Your username must fit the following conditions:\n5-30 alphanumeric letters\nor for nerds: /^\\w{5,30}$/");
		return false;
	}
	else if(!password.match(password_regex)){
		alert("Your username must fit the following conditions:\n5-30 signs; at least 1 special character and 1 non special character\nor for nerds: /^(?=.*\w)(?=.*\W).{5,30}$/");
		return false;
	}
	else if(password != repassword){
		alert("The passwords do not match!");
		return false;
	}
	else{
		return true;
	}
}