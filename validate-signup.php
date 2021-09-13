<?php include './config.php' ?>

<?php
	$name = $_POST["fname"];
	$surname = $_POST["lname"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];

	// checking if the database already exist otherwise I am creating one
	// $sql = "CREATE DATABASE IF NOT EXISTS musicbox";

	//checking if the table already exist otherwise I am creating one
	// $tab = "CREATE TABLE IF NOT EXISTS userInformation (
  //   'id' INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	// 	'name' VARCHAR(50) NOT NULL,
  //   'surname' VARCHAR(50) NOT NULL,
	// 	'email' VARCHAR(50) NOT NULL UNIQUE,
  //   'password' VARCHAR(50) NOT NULL,
  //   'API_key' VARCHAR(50) NOT NULL
	// )";
	//
	// $tab2 = "CREATE TABLE IF NOT EXISTS saltInformation (
  //   'saltInfo' VARCHAR(30),
	// 	FOREIGN KEY (saltInfo) REFERENCES userInformation(id)
	// )";

	$query = "SELECT * FROM userinformation WHERE email = '$email'";
	$res = mysqli_query($mysqli, $query);

	if ($row = mysqli_fetch_array($res)) {
		//checking if the user already exist in the data base
		console.log("I got in here");
		$_SESSION['exist'] = "yep";
		header("Location: signup.php");

		//the next if condition is redundant.... even if its commented out
		//js will take it place.... its already implemented in validate-signup.js
	}elseif ($name == "" || $surname == "" || $email == "" || $pass == "") {
		// code...
		$_SESSION['check'] = "blank";
		header("Location: signup.php");
	}else{
		# code..
		console.log("Creating User");
		//*************************************************************
		//doing the whole encryption things....
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $salt = '';

    for ($i = 0; $i < strlen($pass); $i++) {
        $salt .= $characters[rand(0, $charactersLength - 1)];
    }

    $salted = $pass . $salt;
		$hashed = hash('sha256', $salted);

		//*************************************************************

		//*************************************************************
		//generating API keys
		$API = '';

		for ($i = 0; $i < 10; $i++) {
        $API .= $characters[rand(0, $charactersLength - 1)];
    }

		//*************************************************************

		$query = "INSERT INTO userInformation (name, surname, email, password, api_key, salt)
              VALUES ('$name', '$surname', '$email', '$hashed', '$API', '$salt');";

		mysqli_query($mysqli, $query);

		// $query2 = "INSERT INTO saltInformation (saltInfo)
    //           VALUES ('$salt', LAST_INSERT_id());";
		//
		// mysqli_query($mysqli, $query2);

		$_SESSION['goAhead'] = "yep";
		header("Location: login.php");
		exit();
	}

	mysqli_close($mysqli);
?>
