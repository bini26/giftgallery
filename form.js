function validateRegisterForm() {
    // alert("hello form");
    // get the value from the form
    var error = 0;
  
    var name = document.contact.name.value;
    var subject = document.contact.subject.value;
    var msg = document.contact.msg.value;
    var email = document.contact.email.value;
    

  
    var success_msg = "";
  
    // validate the data with error message
  
    // validation for firstname
    if (name.trim() == "") {
      document.getElementById("err_name").innerHTML = "Name is Required";
      document.getElementById("name").focus();
      error++;
    }
    // }  validation for subject
    if (subject.trim() == "") {
        document.getElementById("err_subject").innerHTML = "subject is Required";
        document.getElementById("subject").focus();
        error++;
      } 
  
    // validation for username
    if (msg.trim() == "") {
      document.getElementById("err_msg").innerHTML = "Message is Required";
      document.getElementById("msg").focus();
      error++;
    }
  
    
  
    // validation for email
    var email_pattern = /\S+@\S+\.\S+/;
    if (email.trim() == "") {
      document.getElementById("err_email").innerHTML = "Email  is required ";
      document.getElementById("email").focus();
      error++;
    } else if (!email_pattern.test(email)) {
      error++;
      document.getElementById("err_email").innerHTML = "Enter valid email";
      document.getElementById("email").focus();
    } else {
      document.getElementById("err_email").innerHTML = "";
      success_msg += "Email  is " + email + "<br>";
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