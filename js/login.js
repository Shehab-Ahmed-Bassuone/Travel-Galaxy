var valid = true;

function validate() {
var valid = true;
if(document.loginForm.loginEmail.value=="" ){
alert("Please enter your email");
valid = false;
}

else if(document.loginForm.loginEmail.value.indexOf("@")==-1 || document.loginForm.loginEmail.value.indexOf(".")==-1){
alert("Please Enter valid email");
document.loginForm.loginEmail.focus();
valid = false;
}
else if (document.loginForm.loginPassword.value == "") {
  alert("Please Enter password");
  document.loginForm.loginPassword.focus();
  valid = false;
}
return valid;
}
