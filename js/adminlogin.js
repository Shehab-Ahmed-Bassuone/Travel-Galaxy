function check(){
    if(document.getElementById("email_area").value=="admin"&&document.getElementById("password_area").value=="admin"){
        location.replace('adminpackages.html');

    

    }else{
        alert("invalid password or email please enter another one");
    }
}
