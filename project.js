

function validateRegisterForm() {
    // alert("hello form");
    // get the value from the form
    var error = 0;
  
    var firstname = document.register.firstname.value;
    var lastname = document.register.lastname.value;
    var username = document.register.username.value;
    var password = document.register.password.value;
    var repassword = document.register.cpassword.value;
    var phone = document.register.phone.value;
    var email = document.register.email.value;
    var address = document.register.address.value;

  
    var success_msg = "";
  
    // validate the data with error message
  
    // validation for firstname
    if (firstname.trim() == "") {
      document.getElementById("err_fname").innerHTML = "FirstName is Required";
      document.getElementById("fname").focus();
      error++;
    } else {
      document.getElementById("err_name").innerHTML = "";
      success_msg += "Hello " + firstname + "<br>";
    }
    // validation for lastname
    if (lastname.trim() == "") {
        document.getElementById("err_lname").innerHTML = "LastName is Required";
        document.getElementById("lname").focus();
        error++;
      } else {
        document.getElementById("err_name").innerHTML = "";
        success_msg += "Hello " + lastname + "<br>";
      }
  
    // validation for username
    if (username.trim() == "") {
      document.getElementById("err_username").innerHTML = "User name is Required";
      document.getElementById("username").focus();
      error++;
    } 
    else {
      if (username.length <= 8) {
        document.getElementById("username").focus();
        document.getElementById("err_username").innerHTML =
          "User Name should be of min 8 character";
        error++;
      } else {
        document.getElementById("err_username").innerHTML = "";
        success_msg += "Hello " + username + "<br>";
      }
  
      success_msg += "Hello " + name + "<br>";
    }
  
    // validation for password
    if (password.trim() == "") {
      document.getElementById("err_password").innerHTML = "password is Required";
      document.getElementById("password").focus();
      error++;
    } else if (password.length <= 8) {
      document.getElementById("password").focus();
      document.getElementById("err_password").innerHTML =
        "Password should be of min 8 character";
      error++;
    } else {
      document.getElementById("err_password").innerHTML = "";
      // success_msg+= "Hello "+ password + "<br>";
    }
  
    // validation for repassword
    if (repassword.trim() == "") {
      document.getElementById("err_repassword").innerHTML = "Re Enter password ";
      document.getElementById("cpassword").focus();
      error++;
    } else {
      document.getElementById("err_repassword").innerHTML = "";
    }
  
    // console.log(password, repassword);
    // validation for password match
    if (repassword != password) {
      document.getElementById("err_repassword").innerHTML =
        "Password Not matched  ";
      document.getElementById("cpassword").focus();
      error++;
    } else {
      document.getElementById("err_repassword").innerHTML = "";
      success_msg += "Password is " + password + "<br>";
    }
  
    // validation for phone // 9804493112 ncell // 9867580017 ntc
    var phone_pattern = /^(98[0-3]{1}[0-9]{7}|98[4-6]{1}[0-9]{7})$/;
    if (phone.trim() == "") {
      document.getElementById("err_phone").innerHTML = "Phone No is required ";
      document.getElementById("phone").focus();
      error++;
    } else if (!phone_pattern.test(phone)) {
      error++;
      document.getElementById("err_phone").innerHTML =
        "Phone No must be in number format with 10 digit starting with 98 ";
    } else if (phone.length < 10) {
      document.getElementById("err_phone").innerHTML =
        "Phone No must be 10 digit ";
      error++;
    } else {
      document.getElementById("err_phone").innerHTML = "";
      success_msg += "Phone no  is " + phone + "<br>";
    }
  
    // validation for email
    var email_pattern = /\S+@\S+\.\S+/;
    if (email.trim() == "") {
      document.getElementById("err_email").innerHTML = "email  is required ";
      document.getElementById("mail").focus();
      error++;
    } else if (!email_pattern.test(email)) {
      error++;
      document.getElementById("err_email").innerHTML = "Enter valid email";
      document.getElementById("mail").focus();
    } else {
      document.getElementById("err_email").innerHTML = "";
      success_msg += "Email  is " + email + "<br>";
    }
    // validation for address
    if (address.trim() == "") {
        document.getElementById("err_address").innerHTML = "Address is Required";
        document.getElementById("address").focus();
        error++;
      } else {
        document.getElementById("err_address").innerHTML = "";
        success_msg += "Hello " + address + "<br>";
      }
  
    // now  check if there is error and return value
    console.log(error);
    if (error > 0) {
      return false;
    } else {
      return true;
    }
  }


function myfunction(){
    var x = document.getElementById("password");

    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");

    if(x.type==='password'){
        x.type="text";
        y.style.display = "block";
        z.style.display = "none";
    }
    
    else{
        x.type="password";
        y.style.display = "none";
        z.style.display = "block";
    }
}
function myfunction1(){
    var x = document.getElementById("cpassword");
    var y = document.getElementById("hide3");
    var z = document.getElementById("hide4");

    if(x.type==='password'){
        x.type="text";
        y.style.display = "block";
        z.style.display = "none";
    }
    
    else{
        x.type="password";
        y.style.display = "none";
        z.style.display = "block";
    }
}