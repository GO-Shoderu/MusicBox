<?php include './config.php' ?>

<?php
  // && isset($_SESSION['password'])
  if (isset($_SESSION['user'])) {
    # code...
    //redirecting the user to the homepage.........
    header("Location: index.php");

    //terminating this page if the user already have a Session
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Gabriel Shoderu" />
        <title>Musicbox  - SignUp</title>

      <link rel="stylesheet" type="text/css" href="css/style.css">
       <link rel="icon" type="image/png" href="logo/LG_u.png" sizes="any"/>

       <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   		  <script src="./javascript/validate-signup.js"></script>
    </head>
    <body>

      <div class="container">
        <br>
          <p align = "center">
            <a href="./index.php"><img src="./logo/Lg_Name_U.png" width="350" height="50"></a>
          </p>
          <br />
          <div class="contain">

              <!-- //hidden vairables for the use of monitoring unwanted input or feedback regarding
              //certain errors -->
              <input type="hidden" id="hidden1" name="custId" value="0">
              <input type="hidden" id="hidden2" name="custId" value="0">
              <input type="hidden" id="hidden3" name="custId" value="0">
              <input type="hidden" id="hidden4" name="custId" value="0">


            <!-- <form action="validate-signup.php" method="post"> -->
            <!-- <form action="validate-signup.php" method="post" name="myForm"> -->
            <form action="validate-signup.php" method="post" onsubmit="return validateForm()" name="myForm">
              <fieldset>
              <legend class="dove">Register</legend>
                <?php
                  if(isset($_SESSION['exist']) && $_SESSION['exist'] == "yep")
                  {
                    echo "<p style='color:red;'>" . "You already exist on our database" . "</p>";
                    $_SESSION['exist'] = " ";
                  }elseif (isset($_SESSION['check']) && $_SESSION['check'] == "blank") {
                    // code...
                    echo "<p style='color:red;'>" . "All fields are required" . "</p>";
                    $_SESSION['check'] = " ";
                  }
                ?>
                    <div class="form-group">
                        <label for="fname">First name:</label>
                        <input type="text" name="fname" id="fname" class="join" placeholder="John"/>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last name:</label>
                        <input type="text" name="lname" id="lname" class="join" placeholder="Doe"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" id="email" class="join" placeholder="john.doe@gmail.com"/>
                    </div>
                    <div class="form-group">
                        <label for="pass">Create password:</label>
                        <input type="password" name="pass" id="pass" class="join" placeholder="********"/>
                    </div>
                    <div class="dove">
                      <input type="submit" value="Register" />
                    </div>
                </fieldset>
            </form>
            <br/>
            <p class="dove" style="left:50%;"><a href="login.php">Already a Member? </a></p>
          </div>
      </div>
    </body>
</html>
