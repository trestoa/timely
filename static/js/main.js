/**********************************************************************

timely, a webbased calender
Copyright (C) 2013  Markus Klein <m@mklein.co.at>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.


Made with <3

***********************************************************************/

function check_signup(){
	var username = $('#signup-username').val();
	var password = $('#signup-password').val();
	var repassword = $('#signup-repassword').val();
	var email = $('#signup-email').val();
	var username_regex = /^\w{5,30}$/;
	var email_regex = /^.{5,50}$/;
	if(!username.match(username_regex)){
	var password_regex = /^(?=.*\w)(?=.*\W).{5,30}$/;
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
	else if(!email.match(email_regex)){
		alert("Please enter an email address!");
	}
	else{
		return true;
	}
}