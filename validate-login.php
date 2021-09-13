<?php include './config.php' ?>

<?php
	//storing data to be stored into the database into a variable too
	$email = $_POST["email"];
	$pass = $_POST["pass"];

	$check;
	$none = 0;

	$query = "SELECT * FROM userinformation WHERE email = '$email'";
	$res = mysqli_query($mysqli, $query);

	if ($row = mysqli_fetch_array($res)) {
		// echo "The email is right";
		// die("The email is right");
		$salt = $row['salt'];

		// $anotherQuery = "SELECT * FROM saltInformation WHERE id = '$id'";
		// $anotherRes = mysqli_query($mysqli, $anotherQuery);
		//
		// if ($anotherRow = mysqli_fetch_array($anotherRes)) {
		// 	// code...
		// 	// echo "The salt is right";
		// 	$salt = $anotherRow['saltInfo'];
		// }else {
		// 	// code...
		// 	// echo 'something went wrong with salt';
		// }

		$salted = $pass . $salt;
		$hashed = hash('sha256', $salted);

		if ($hashed == $row['password']) {
			// code...
			$_SESSION['api'] = $row['api_key'];
			// $_GLOBAL['ap'] = $row['api_key'];
			$_SESSION['status'] = "1";
			header("Location: index.php");
		}else {
			// code...
			// die("Wrong password");
			$_SESSION['password'] = 'false';
			header("Location: login.php");
		}
	}else {
		// code...
		// echo "user does not exist in the database";
		$_SESSION['loggedIn'] = 'false';
		header("Location: login.php");
	}

	mysqli_close($mysqli);
?>
