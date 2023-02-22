// jQuery Script 



// Document is ready
 $(document).ready  (function () {


// Validate Username

$("#usercheck").hide();
let usernameError = true;
$("#usernames").keyup(function () {
validateUsername();
});

function validateUsername() {
let usernameValue = $("#usernames").val();
if (usernameValue.length == "") {
    event.preventDefault();
$("#usercheck").show();
usernameError = false;
return false;
}  else {
$("#usercheck").hide();


}
}



// validate email



$("#emailvalid").hide();
let EmailError = true;
$("#email").keyup(function () {
validateEmail();
});

function validateEmail(){

let emailvalue = $("#email").val();
if (emailvalue.length == ""){
$("#emailvalid").show();
EmailError = false;
return false;
} 

    else{
        
        $("#emailvalid").hide();
        

    }

}





// Validate Password

$("#passcheck").hide();
let passwordError = true;
$("#password").keyup(function () {
validatePassword();
});
function validatePassword() {
let passwordValue = $("#password").val();
if (passwordValue.length == "") {
$("#passcheck").show();
passwordError = false;
return false;
}
if (passwordValue.length < 3 || passwordValue.length > 10) {
$("#passcheck").show();
$("#passcheck").html(
    "**length of your password must be between 3 and 10**"
);
$("#passcheck").css("color", "red");
passwordError = false;
return false;
} else {
$("#passcheck").hide();

}
}

// Validate Confirm Password

$("#conpasscheck").hide();
let confirmPasswordError = true;
$("#conpassword").keyup(function () {
validateConfirmPassword();
event.preventDefault();
});
function validateConfirmPassword() {
let confirmPasswordValue = $("#conpassword").val();
let passwordValue = $("#password").val();
if (passwordValue != confirmPasswordValue) {
$("#conpasscheck").show();
$("#conpasscheck").html("**Password didn't Match");
$("#conpasscheck").css("color", "red");
confirmPasswordError = false;
return false;
} else {
$("#conpasscheck").hide();

}
}


//age button


$("#age").hide();
let ageError = true;
$("#agename").keyup(function () {
validateage();
event.preventDefault();
});
function validateage(){


let ageValue = $("#agename").val();
if (ageValue.length == "") {
$("#age").show();
ageError = false;
return false;
} 

else {
$("#age").hide();

}
}



// Submit button


$("#submitbtn"). click ( function () {
	validateUsername();
	validatePassword();
	validateConfirmPassword();
	validateEmail();
	validateage();
	preventDefault();


	if (
	usernameError == true &&
	passwordError == true &&
	confirmPasswordError == true &&
	EmailError == true &&
	ageError == true 
	
     )
	 {
	return true;
	}
	
	else {
	return false;
	}

    
});

});

    




