<?php include './config.php' ?>

<?php
	// $key = $_POST["key"];
	// $type = $_POST["type"];
	// $title = $_POST["title"];

	$key = "1V6nqZi0qC";

	$query = "SELECT * FROM userInformation WHERE api_key = '$key'";
	// $query = "SELECT * FROM userInformation WHERE api_key = $_POST['key']";
	$res = mysqli_query($mysqli, $query);

	if (isset[$_POST['type']] == 'login') {
		// code...
		$email = $_POST["email"];
		$pass = $_POST["pass"];

		$check;
		$none = 0;

		$query = "SELECT * FROM userInformation WHERE email = '$email'";
		$res = mysqli_query($mysqli, $query);

		if ($row = mysqli_fetch_array($res)) {
			// echo "The email is right";
			// die("The email is right");
			$id = $row['id'];

			$anotherQuery = "SELECT * FROM saltInformation WHERE id = '$id'";
			$anotherRes = mysqli_query($mysqli, $anotherQuery);

			if ($anotherRow = mysqli_fetch_array($anotherRes)) {
				// code...
				// echo "The salt is right";
				$salt = $anotherRow['salt'];
			}else {
				// code...
				// echo 'something went wrong with salt';
			}

			$salted = $pass . $salt;
			$hashed = hash('sha256', $salted);

			if ($hashed == $row['password']) {
				// code...
				$_SESSION['api'] = $row['api_key'];
				$_SESSION['loggedIn'] = 'true';
				// header("Location: index.php");
			}else {
				// code...
				// die("Wrong password");
				$_SESSION['password'] = 'false';
				// header("Location: login.php");
			}
		}else {
			// code...
			// echo "user does not exist in the database";
			$_SESSION['loggedIn'] = 'false';
			// header("Location: login.php");
		}

		mysqli_close($mysqli);
	}

	if ($row = mysqli_fetch_array($res)) {
		//checking if the requester have an apikey
		console.log("User exist on the server");

		if (isset($_POST['$title'])) {
			// code...
			if ($_POST['returns']['*'] == true) {
				// code...
				$curl = curl_init();

				$url = "https://api.themoviedb.org/3/search/movie?api_key=40e8ea487197e3a827add9507e16ddd7&query=".$_POST['title'];
				curl_setopt($cSession, CURLOPT_URL, $url)
			  curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
			  curl_setopt($cSession, CURLOPT_HEADER, false);
			  curl_setopt($cSession, CURLOPT_PROXY, "phugeet.cs.up.ac.za:3128");

				$result = json_decode(curl_exec($curl), TRUE);
				curl_close($curl);

				$time = time();
				$arr[] = ['status' => 'success', 'timestamp' => $time];

				echo json_encode(array_merge($result['results'], $arr));
			}
		}



	}else{
    die("Unsuccessful");
  }

	mysqli_close($mysqli);
?>

<?php
 session_start();

class Movie
{

        public static function instance()
        {
            static $api = null;
            if($api === null) $api = new Movie();
            return $api;
        }

        private function __construct() { /*Connect to the database */}
        public function __destruct() { /*Disconnect from the database*/ }

        public function alldata($url)  //pass a url thats been checked  *// tmdb
        { /*this data should be json echoed to the api.php*/

               $curl = curl_init();
               curl_setopt($curl, CURLOPT_URL, $url);
               //curl_setopt($curl, CURLOPT_PROXY ,"phugeet.cs.up.ac.za:3128");
               curl_setopt($curl,CURLOPT_CUSTOMREQUEST,"POST");
               $response = curl_exec($curl);
               curl_close($curl);
              // return "$response";
               echo $response;
                echo "hjsdbvjsdbvjkbsdvbskbnfnf";

        }
        public function omdballdata($url)  //pass a url thats been checked  //omdb
        { /*this data should be json echoed to the api.php*/

               $curl = curl_init();
               curl_setopt($curl, CURLOPT_URL, $url);
              // curl_setopt($curl, CURLOPT_PROXY ,"phugeet.cs.up.ac.za:3128");
               //curl_setopt($curl,CURLOPT_CUSTOMREQUEST,"POST");
               $response = curl_exec($curl);
               curl_close($curl);
              // return "$response";


        }
}
        ///////////////movie instance
     $returns = Movie::instance();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') // check set methos then call each respective page
    {
            if (isset($_POST['bytitle'])) { //search by title only

                        $obj= new \stdClass();
                        $time =time();
                        ///ceate object
                        $obj->status="success";
                        $obj->timestamp=$time;
                        $myJSON = json_encode($obj);
                        echo $myJSON;
                        $title= $_POST['title'];
                        $url ="https://api.themoviedb.org/3/search/movie?include_adult=false&page=1&query=".$title."&language=en-US&api_key=75cf86776b2c3f5d57f717c821b92323";
                        //$returns = Movie::instance();
                        //$data= $returns->alldata($url);
                        //$obj->data=$returns->alldata($url);
                        $returns->alldata($url);
                       // echo $returns;

            }
            else if (isset($_POST['imdb'])) {  //8d18deff   imdb  omdb
                # code...
                        $obj= new \stdClass();
                        $time =time();
                        $obj->status="success";
                        $obj->timestamp=$time;
                        $myJSON = json_encode($obj);
                        echo $myJSON;
                        $id= $_POST['id'];
                        $url ="http://www.omdbapi.com/?i=".$id."&apikey=8d18deff";
                        $returns->omdballdata($url);
             }
             else if (isset($_POST['genres'])) {   //https://api.themoviedb.org/3/discover/movie?api_key=75cf86776b2c3f5d57f717c821b92323&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_genres=99
                 # code...

                       $obj= new \stdClass();
                        $time =time();
                        $obj->status="success";
                        $obj->timestamp=$time;
                        $myJSON = json_encode($obj);
                        echo $myJSON;
                        $genre= $_POST['genre'];
                        $url ="https://api.themoviedb.org/3/discover/movie?api_key=75cf86776b2c3f5d57f717c821b92323&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_genres=".$genre;
                        $returns->alldata($url);
             }
            else if (isset($_POST['byear'])) {
                 # code...

                       $obj= new \stdClass();
                        $time =time();
                        $obj->status="success";
                        $obj->timestamp=$time;
                        $myJSON = json_encode($obj);
                        echo $myJSON;
                        $year= $_POST['year'];
                        $url ="https://api.themoviedb.org/3/discover/movie?api_key=75cf86776b2c3f5d57f717c821b92323&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&primary_release_year=".$year;

                        $returns->alldata($url);

               }

    }
?>
