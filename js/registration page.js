
let customer = new Object;
var arr=new Array(500);
var cnt=0;
var fs=require('fs');
fs.ReadFileSync();

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


function register_button(){
get_text_from_elemnts();
arr[cnt]=customer;
console.log(arr[cnt]);
cnt++;
}

