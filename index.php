<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Musicbox</title>
		<meta charset="UTF-8" />
		<meta name="Author" content="Gabriel Shoderu" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="logo/LG_u.png" sizes="any"/>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="./javascript/index.js"></script>
	</head>
	<body>
		<div id="container">

					<!-- navigation side of the head-->

					<?php
						require_once "header.php";
					?>

					<div><br/></div>
					<input type="hidden" id="hidden" name="custId" value="7">
					<br>
					<img class="MovieboxSearch" src="logo/Lg_Name_U.png" width="350" height="50" alt="Moviebox Image" />
					<br><br>

					<!--change this id to the first content (Search Area) -->
					<div id="forHeight" class="headerColorCategory" >
				 	<!-- <div id="body"> -->
						 <div id="slide" style="float:left">
							 <figure>
									 <img src="images/slides/elevationWorship.jpg" alt="Elevation worship image"/>
									 <img src="images/slides/legend.webp" alt="legend image"/>
									 <img src="images/slides/beyonceHomeComing.jpg" alt="homecoming image"/>
									 <img src="images/slides/taylor.jpg" alt="taylor swift image"/>
									 <img src="images/slides/bruno.jpg" alt="bruno mars image"/>
							 </figure>
						 </div>

						 <div id="slide3">
								<img src="logo/Logo_216.png" width="575" height="300" alt="logo image"/>
						 </div>

						<br><br><br><br><br><br><br><br><br>
				</div>

				<div></div>
				<!--change this id to the first content (Coming Soon Area) -->
				<div id="forMovies" class="headerColorCategory">

					 <p class="comingSoonTag"><strong>Coming Soon....</strong></p>


					 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					 <p class="comingSoonTag2"><a href="tour.html" id="seeMore" ><strong>Let's go for a tour....</strong></a>&nbsp;&nbsp;</p>
				</div>
		</div>
	</body>
</html>
