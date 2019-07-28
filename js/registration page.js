
let customer = new Object;
var arr=new Array(500);
var cnt=0;



function get_text_from_elemnts(){
  customer.firstname= document.getElementById("firstname_area").value;

  customer.lastname= document.getElementById("lastname_area").value;

   customer.email= document.getElementById("email_area").value;

   customer.password=document.getElementById("password_area").value;

   customer.password_rewrite=document.getElementById("rewrite_password_area").value;

  customer.mobile_number= document.getElementById("mobile_number_area").value;

    customer.visa_number=document.getElementById("visa_number_area").value;

   customer.cvv_number=document.getElementById("cvv_area").value;

customer.expiry_date=document.getElementById("expirydate_area").value;
}


function register(){
get_text_from_elemnts();
arr[cnt]=customer;
console.log(arr[cnt]);
cnt++;
}

function validate() {
var valid = true;
if(document.inputForm.fname.value=="" || document.inputForm.lname.value=="" || document.inputForm.email.value==""
||document.inputForm.password1.value=="" || document.inputForm.password2.value=="" || document.inputForm.mobile.value==""
||document.inputForm.VN.value=="" || document.inputForm.cvv.value=="" || document.inputForm.exp.value==""){
alert("Please fill all data fields");
valid = false;
}

else if(document.inputForm.email.value.indexOf("@")==-1 || document.inputForm.email.value.indexOf(".")==-1){
alert("Please Enter valid email");
document.inputForm.email.focus();
valid = false;
}
else if (document.inputForm.password1.value != document.inputForm.password2.value){
  alert("Password doesn't match");
  document.inputForm.password2.focus();
  valid = false;
}
else if (isNaN(document.inputForm.mobile.value)){
  alert("Please input valid data for Mobile number");
  document.inputForm.mobile.focus();
  valid = false;
}
else if (isNaN(document.inputForm.VN.value)){
  alert("Please input valid data for Credit card number");
  document.inputForm.VN.focus();
  valid = false;
}
else if (isNaN(document.inputForm.cvv.value)){
alert("Please input valid data for CVV");
document.inputForm.cvv.focus();
valid = false;
}
if(valid)
 register();
return valid;
}
function success_register(){

  alert("Successful registration you can now sign in");

}
