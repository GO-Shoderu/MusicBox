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
        <title>Musicbox - LogIn</title>

        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="icon" type="image/png" href="logo/LG_u.png" sizes="any"/>

    </head>
    <body>
      <span class=""></span><span class=""></span><span class=""></span><span class=""></span>
      <div class="container">
          <p align = "center">
            <a href="./index.php"><img src="./logo/Lg_Name_U.png" width="350" height="50"></a>
          </p>
          <br />

          <div class="contain">
            <form action="validate-login.php" method="post">
                <fieldset>
                    <legend class="dove">Log in</legend>
                    <?php
                      if(isset($_SESSION['goAhead']) && $_SESSION['goAhead'] == "yep")
                      {
                        echo "<p class='dove'>" . "Account Created successfully" . "<br />" . "You can Login now" . "</p>";
                        $_SESSION['goAhead'] = " ";
                      }
                    ?>
                    <?php
                      if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == "false")
                      {
                        echo "<p class='dove' style='color:red'>" . "Enter correct email, email doesn't exist" . "</p>";
                        $_SESSION['loggedIn'] = '';
                        $_SESSION['password'] = '';
                      }
                    ?>
                    <?php
                      if(isset($_SESSION['password']) && $_SESSION['password'] == "false")
                      {
                        echo "<p class='dove' style='color:red'>" . "Enter correct password" . "</p>";
                        // echo 'password issues';
                        $_SESSION['password'] = '';
                      }
                    ?>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control"  name="email" id="email" placeholder="john.doe@gmail.com"/>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="********"/>
                    </div>
                    <div class="dove">
                      <input type="submit" class="btn btn-default dove bit" value="Log in" />
                    </div>
                </fieldset>
            </form>
            <br/>
            <p class="dove" style="left:50%;"><a href="signup.php">Not a Member yet? </a></p>
          </div>
      </div>
    </body>
</html>
