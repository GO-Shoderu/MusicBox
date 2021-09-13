  function validateForm() {
    console.log("I got here");

    var fname = document.forms["myForm"]["fname"].value;
    var lname = document.forms["myForm"]["lname"].value;
    var email = document.forms["myForm"]["email"].value;
    var pass = document.forms["myForm"]["pass"].value;

    var input = $("form").find("input.join");
    var labe = $("div").find("label");

    var labe1 = $("#hidden1").attr("value");
    var labe2 = $("#hidden2").attr("value");
    var labe3 = $("#hidden3").attr("value");
    var labe4 = $("#hidden4").attr("value");

    console.log(labe.length);
    console.log(labe1);
    console.log(labe2);
    console.log(labe3);
    console.log(labe4);
    console.log(input.length);

    var mailStatus = false;
    var passStatus = false;
    var spaces = false;

    //needed regex variables for mail
    var regexForMail = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;

    //*************************************************************
    //needed regex variables for password
    var regexForPass = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#?!@$%^&*-]).{8,}$/;
    //*************************************************************

    //check if the email have all what it needs
     if(regexForMail.test(email)){
      console.log("email stats " + regexForMail.test(email));
        mailStatus = true;
      }

    //check if the password have all the required stuffs
    if(regexForPass.test(pass)){
      console.log("password stats " + regexForPass.test(pass));
      passStatus = true;
    }

    var g = labe1;
    var h = labe2;
    var i = labe3;
    var j = labe4;

    //checking to be sure there are no form spaces left unfilled
    if (fname == null || fname == "" || lname == null || lname == "" || email == null || email == "" || pass == null || pass == "") {
      spaces = false;

      if (fname == null || fname == "") {
        input[0].style.backgroundColor = "#FC7F7F";

        if (g == 0) {
          var node0 = document.createTextNode(" First name is important, please input a first name");
          $("#hidden1").attr("value","1");
        }else {
          var node0 = document.createTextNode(" ");
        }

        labe[0].appendChild(node0);
      }else {
        //return the color to it normal state
        $("#hidden1").attr("value","0");
        // labe[0].text("First name:");
      }

      if (lname == null || lname == "") {
        input[1].style.backgroundColor = "#FC7F7F";

        if (h == 0) {
          var node1 = document.createTextNode(" Last name is important, please input a last name");
          $("#hidden2").attr("value","1");
        }else {
          var node1 = document.createTextNode(" ");
        }

        labe[1].appendChild(node1);
      }else {
        //return the color to it normal state
        $("#hidden2").attr("value","0");
        // labe[1].text("Last name:");
      }

      if (mailStatus == false) {
        input[2].style.backgroundColor = "#FC7F7F";

        if (i == 0) {
          var node2 = document.createTextNode(" Enter a valid E-mail");
          $("#hidden3").attr("value","1");
        }else {
          var node2 = document.createTextNode(" ");
        }

        labe[2].appendChild(node2);
      }else {
        //return the color to it normal state
        $("#hidden3").attr("value","0");
        // labe[2].text("Email address:");
      }

      if (passStatus == false) {
        input[3].style.backgroundColor = "#FC7F7F";

        if (j == 0) {
          var node3 = document.createTextNode(" Enter a valid password, at least a lower case, an upper case, number and a symbol");
          $("#hidden4").attr("value","1");
        }else {
          var node3 = document.createTextNode(" ");
        }

        labe[3].appendChild(node3);
      }else {
        //return the color to it normal state
        $("#hidden4").attr("value","0");
        // labe[3].text("Create password:");
      }

    }else {
      spaces = true;
    }


    // var i = 0;
    // var j = 0;
    //
    // if (mailStatus == false && passStatus == true) {
    //   input[2].style.backgroundColor = "#FC7F7F";
    //
    //   if (i == 0) {
    //     var node2 = document.createTextNode(" Enter a valid E-mail");
    //     i++;
    //   }else {
    //     var node2 = document.createTextNode("");
    //   }
    //
    //   labe[2].appendChild(node2);
    // }else if (mailStatus == true && passStatus == false) {
    //   input[3].style.backgroundColor = "#FC7F7F";
    //
    //   if (j == 0) {
    //     var node3 = document.createTextNode(" Enter a valid password, at least a lower case, an upper case, number and a symbol");
    //     j++;
    //   }else {
    //     var node3 = document.createTextNode("");
    //   }
    //
    //   labe[3].appendChild(node3);
    // }else if(mailStatus == false && passStatus == false){
    //   input[2].style.backgroundColor = "#FC7F7F";
    //   input[3].style.backgroundColor = "#FC7F7F";
    //
    //   if (i == 0) {
    //     var node2 = document.createTextNode(" Enter a valid E-mail");
    //     i++;
    //   }else {
    //     var node2 = document.createTextNode("");
    //   }
    //
    //   if (j == 0) {
    //     var node3 = document.createTextNode(" Enter a valid password, ast least a lower case, an upper case, number and a symbol");
    //     j++;
    //   }else {
    //     var node3 = document.createTextNode("");
    //   }
    //
    //   labe[2].appendChild(node2);
    //   labe[3].appendChild(node3);
    // }
    //
    if (passStatus == false || mailStatus == false || spaces == false) {
      return false;
    }else {
      return true;
    }
}
