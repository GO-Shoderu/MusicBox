<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Musicbox</title>
		<meta charset="UTF-8" />
		<meta name="Author" content="Gabriel Shoderu" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="logo/LG_u.png" sizes="any"/>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="./javascript/trending.js"></script>
	</head>
	<body>
		<div id="container">

					<?php
						require_once "./header.php";
					?>


					<div><br/></div>
					<input type="hidden" id="hidden" name="custId" value="6">

					<div id="body" class="headerColorCategory">

					 <br><br><br><br>
					 <img class="MovieboxSearch" src="logo/Lg_Name_U.png" width="350" height="50" alt="Musicbox Image" />
					 <br><br>

						<form>
				      <input type="text" placeholder="Music Title to search for" name="search" id="searchArea">
							<input type="button" id="seA" value="Search">
				    </form>

						<br>
						<input type="radio" name="editList" id="Action" value="genre"/>
						<label for="genre"><strong>Pop</strong></label>

						<input type="radio" name="editList" id="Comedy" value="releaseDate"/>
						<label for="releaseDate"><strong>R & B</strong></label>

						<input type="radio" name="editList" id="Cartoon" value="rating"/>
						<label for="rating"><strong>Rap</strong></label>
						<br><br>

				</div>

				<div></div>

			 <div id="forMovies" class="fM">

					 <p class="comingSoonTag cm"><strong class="cm">Results....</strong></p>

					<div class="space">
						&nbsp;&nbsp;
					</div>

				 	 <div class="movies">
						 <div class="toHover">
							 <div style="width:285px;height:400px;">
								 <img class="moviesImage" src="images/loader/load.gif" width="40" height="40" alt="21 cover Image" style="opacity:0.7;border-radius:4px;position:absolute;top:50%;left:40%;margin-left:auto;
 							 margin-right:auto;" />
  						 </div>
							<div class="overlay">
						    <div class="text">
									<ul>
										<li class="discover"><u>Artist</u> <br/><span class="art"> </span></li>
										<li class="discover"><u>Release Date</u> <br/><span></span></li>
										<li class="discover"><u>Rating</u> <br/><span></span></li>
										<li class="discover"><u>Genre</u> <br/><span></span></li>
										<li class="discover"><u>Record Label</u> <br/><span></span></li>
										<li class="discover"><u>Album</u> <br/><span></span></li>
									</ul>
						    </div>
						  </div>
						 </div>

						<div id="title">
							<p class="t" style="color:white;"></p>
							<p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
						</div>
					 </div>

					 <div class="space">
						 &nbsp;&nbsp;
					 </div>

					 <div class="movies">
						 <div class="toHover">
							 <div style="width:285px;height:400px;">
								 <img class="moviesImage" src="images/loader/load.gif" width="40" height="40" alt="21 cover Image" style="opacity:0.7;border-radius:4px;position:absolute;top:50%;left:40%;margin-left:auto;
 							 margin-right:auto;" />
  						</div>
							<div class="overlay">
						    <div class="text">

									<ul>
										<li class="discover"><u>Artist</u> <br/><span class="art"> </span></li>
										<li class="discover"><u>Release Date</u> <br/><span></span></li>
										<li class="discover"><u>Rating</u> <br/><span></span></li>
										<li class="discover"><u>Genre</u> <br/><span></span></li>
										<li class="discover"><u>Record Label</u> <br/><span></span></li>
										<li class="discover"><u>Album</u> <br/><span></span></li>
									</ul>

						    </div>
						  </div>
						</div>

						<div id="title">
							<p class="t" style="color:white;"></p>

							<p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
						</div>
					 </div>

		 			 <div class="space">
		 				 &nbsp;&nbsp;
		 			 </div>

		 			 <div class="movies">
		 				 <div class="toHover">
							<div style="width:285px;height:400px;">
								<img class="moviesImage" src="images/loader/load.gif" width="40" height="40" alt="21 cover Image" style="opacity:0.7;border-radius:4px;position:absolute;top:50%;left:40%;margin-left:auto;
 							margin-right:auto;" />
						 </div>
							<div class="overlay">
						    <div class="text">

									<ul>
										<li class="discover"><u>Artist</u> <br/><span class="art"> </span></li>
										<li class="discover"><u>Release Date</u> <br/><span></span></li>
										<li class="discover"><u>Rating</u> <br/><span></span></li>
										<li class="discover"><u>Genre</u> <br/><span></span></li>
										<li class="discover"><u>Record Label</u> <br/><span></span></li>
										<li class="discover"><u>Album</u> <br/><span></span></li>
									</ul>

						    </div>
						  </div>
		 				</div>

		 				<div id="title">
		 					<p class="t" style="color:white;"></p>

							<p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
		 				</div>
		 			 </div>


					 <div class="space">
						 &nbsp;&nbsp;
					 </div>

					 <div class="movies">
						 <div class="toHover">
							 <div style="width:285px;height:400px;">
								 <img class="moviesImage" src="images/loader/load.gif" width="40" height="40" alt="21 cover Image" style="opacity:0.7;border-radius:4px;position:absolute;top:50%;left:40%;margin-left:auto;
 							 margin-right:auto;" />
							</div>
							<div class="overlay">
						    <div class="text">

									<ul>
										<li class="discover"><u>Artist</u> <br/><span class="art"> </span></li>
										<li class="discover"><u>Release Date</u> <br/><span></span></li>
										<li class="discover"><u>Rating</u> <br/><span></span></li>
										<li class="discover"><u>Genre</u> <br/><span></span></li>
										<li class="discover"><u>Record Label</u> <br/><span></span></li>
										<li class="discover"><u>Album</u> <br/><span></span></li>
									</ul>

						    </div>
						  </div>
						</div>

						<div id="title">
							<p class="t" style="color:white;"></p>

							<p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
						</div>
					 </div>

					 <!-- <br><br><br><br><br><br><br> -->

					 <p class="comingSoonTag2 m"><a href="latest.php" id="seeMore"><strong></strong></a>&nbsp;&nbsp;</p>

			</div>

			<div id="forMovies" class="fM">

					<!-- <p class="comingSoonTag cm"><strong class="cm">Results....</strong></p> -->

				 <div class="space">
					 &nbsp;&nbsp;
				 </div>

					<div class="movies">
						<div class="toHover">
							<div style="width:285px;height:400px;">
								<img class="moviesImage" src="images/loader/load.gif" width="40" height="40" alt="21 cover Image" style="opacity:0.7;border-radius:4px;position:absolute;top:50%;left:40%;margin-left:auto;
 							margin-right:auto;" />
							</div>
						 <div class="overlay">
							 <div class="text">
								 <ul>
									 <li class="discover"><u>Artist</u> <br/><span class="art"> </span></li>
									 <li class="discover"><u>Release Date</u> <br/><span></span></li>
									 <li class="discover"><u>Rating</u> <br/><span></span></li>
									 <li class="discover"><u>Genre</u> <br/><span></span></li>
									 <li class="discover"><u>Record Label</u> <br/><span></span></li>
									 <li class="discover"><u>Album</u> <br/><span></span></li>
								 </ul>
							 </div>
						 </div>
						</div>

					 <div id="title">
						 <p class="t" style="color:white;"></p>
						 <p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
					 </div>
					</div>

					<div class="space">
						&nbsp;&nbsp;
					</div>

					<div class="movies">
						<div class="toHover">
							<div style="width:285px;height:400px;">
								<img class="moviesImage" src="images/loader/load.gif" width="40" height="40" alt="21 cover Image" style="opacity:0.7;border-radius:4px;position:absolute;top:50%;left:40%;margin-left:auto;
 							margin-right:auto;" />
						 </div>
						 <div class="overlay">
							 <div class="text">

								 <ul>
									<li class="discover"><u>Artist</u> <br/><span class="art"> </span></li>
									<li class="discover"><u>Release Date</u> <br/><span></span></li>
									<li class="discover"><u>Rating</u> <br/><span></span></li>
									<li class="discover"><u>Genre</u> <br/><span></span></li>
									<li class="discover"><u>Record Label</u> <br/><span></span></li>
									<li class="discover"><u>Album</u> <br/><span></span></li>
								</ul>

							 </div>
						 </div>
					 </div>

					 <div id="title">
						 <p class="t" style="color:white;"></p>

						 <p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
					 </div>
					</div>

					<div class="space">
						&nbsp;&nbsp;
					</div>

					<div class="movies">
						<div class="toHover">
						 <div style="width:285px;height:400px;">
							 <img class="moviesImage" src="images/loader/load.gif" width="40" height="40" alt="21 cover Image" style="opacity:0.7;border-radius:4px;position:absolute;top:50%;left:40%;margin-left:auto;
 						 margin-right:auto;" />
						</div>
						 <div class="overlay">
							 <div class="text">

								 <ul>
									<li class="discover"><u>Artist</u> <br/><span class="art"> </span></li>
									<li class="discover"><u>Release Date</u> <br/><span></span></li>
									<li class="discover"><u>Rating</u> <br/><span></span></li>
									<li class="discover"><u>Genre</u> <br/><span></span></li>
									<li class="discover"><u>Record Label</u> <br/><span></span></li>
									<li class="discover"><u>Album</u> <br/><span></span></li>
								</ul>

							 </div>
						 </div>
					 </div>

					 <div id="title">
						 <p class="t" style="color:white;"></p>

						 <p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
					 </div>
					</div>


					<div class="space">
						&nbsp;&nbsp;
					</div>

					<div class="movies">
						<div class="toHover">
							<div style="width:285px;height:400px;">
								<img class="moviesImage" src="images/loader/load.gif" width="40" height="40" alt="21 cover Image" style="opacity:0.7;border-radius:4px;position:absolute;top:50%;left:40%;margin-left:auto;
 							margin-right:auto;" />
						 </div>
						 <div class="overlay">
							 <div class="text">

								 <ul>
									<li class="discover"><u>Artist</u> <br/><span class="art"> </span></li>
									<li class="discover"><u>Release Date</u> <br/><span></span></li>
									<li class="discover"><u>Rating</u> <br/><span></span></li>
									<li class="discover"><u>Genre</u> <br/><span></span></li>
									<li class="discover"><u>Record Label</u> <br/><span></span></li>
									<li class="discover"><u>Album</u> <br/><span></span></li>
								</ul>

							 </div>
						 </div>
					 </div>

					 <div id="title">
						 <p class="t" style="color:white;"></p>

						 <p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
					 </div>
					</div>

					<p class="comingSoonTag2 m"><a href="latest.php" id="seeMore"><strong></strong></a>&nbsp;&nbsp;</p>

		 </div>

			<div></div>

			 <div id="forMovies">

					 <p class="comingSoonTag" align="left"><strong>Popular.....</strong></p>

					<div class="space">
						&nbsp;&nbsp;
					</div>

				 	 <div class="movies">
						 <div class="toHover">
							 <div style="width:285px;height:400px;">
								 <img class="moviesImage" src="images/trending_newRealeases/emile.webp" width="285" height="400" alt="OUR VERSION OF EVENTS cover Image" style="opacity:0.7;border-radius:4px;"/>
							 </div>
							<div class="overlay">
						    <div class="text">

									<ul>
										<li class="discover"><u>Artist</u> <br/> Emile Sande </li>
										<li class="discover"><u>Release Date</u> <br/> 2012 </li>
										<li class="discover"><u>Rating</u> <br/> #9 </li>
										<li class="discover"><u>Genre</u> <br/> R & B, Soul </li>
										<li class="discover"><u>Record Label</u> <br/> Virgin, EMI </li>
										<li class="discover"><u>Album</u> <br/> OUR VERSION OF EVENTS <br/>
									</ul>

						    </div>
						  </div>
						 </div>

						<div id="title">
							<p style="color:white;">OUR VERSION OF EVENTS</p>
							<p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
						</div>
					 </div>

					 <div class="space">
						 &nbsp;&nbsp;
					 </div>

					 <div class="movies">
						 <div class="toHover">
							 <div style="width:285px;height:400px;">
								 <img class="moviesImage" src="images/trending_newRealeases/theWeekend.jpg" width="285" height="400" alt="STARBOY cover Image" style="opacity:0.7;border-radius:4px;"/>
							 </div>
							<div class="overlay">
						    <div class="text">
									<ul>
										<li class="discover"><u>Artist</u> <br/> The Weekend </li>
										<li class="discover"><u>Release Date</u> <br/> 2016 </li>
										<li class="discover"><u>Rating</u> <br/> #6 </li>
										<li class="discover"><u>Genre</u> <br/> Contemporary R&B, Pop music </li>
										<li class="discover"><u>Record Label</u> <br/> XO, Republic </li>
										<li class="discover"><u>Album</u> <br/> STARBOY <br/>
									</ul>
						    </div>
						  </div>
						</div>

						<div id="title">
							<p style="color:white;">STARBOY</p>
							<p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
						</div>
					 </div>

		 			 <div class="space">
		 				 &nbsp;&nbsp;
		 			 </div>

		 			 <div class="movies">
		 				 <div class="toHover">
							 <div style="width:285px;height:400px;">
								 <img class="moviesImage" src="images/trending_newRealeases/ed.webp" width="285" height="400" alt="DIVIDE cover Image" style="opacity:0.7;border-radius:4px;"/>
							 </div>
							<div class="overlay">
						    <div class="text">
									<ul>
										<li class="discover"><u>Artist</u> <br/> Ed Sheeran </li>
										<li class="discover"><u>Release Date</u> <br/> 2017 </li>
										<li class="discover"><u>Rating</u> <br/> #4 </li>
										<li class="discover"><u>Genre</u> <br/> Pop Music </li>
										<li class="discover"><u>Record Label</u> <br/> Atlantic Records UK </li>
										<li class="discover"><u>Album</u> <br/> DIVIDE <br/>
									</ul>
						    </div>
						  </div>
		 				</div>

		 				<div id="title">
		 					<p style="color:white;">DIVIDE</p>
		 					<p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
		 				</div>
		 			 </div>


					 <div class="space">
						 &nbsp;&nbsp;
					 </div>

					 <div class="movies">
						 <div class="toHover">
							 <div style="width:285px;height:400px;">
								 <img class="moviesImage" src="images/trending_newRealeases/troyeSivan.jpg" width="285" height="400" alt="BLUE NEIGHBOURHOOD cover Image" style="opacity:0.7;border-radius:4px;"/>
							 </div>
							<div class="overlay">
						    <div class="text">
									<ul>
										<li class="discover"><u>Artist</u> <br/> Troye Sivan </li>
										<li class="discover"><u>Release Date</u> <br/> 2015 </li>
										<li class="discover"><u>Rating</u> <br/> #9 </li>
										<li class="discover"><u>Genre</u> <br/> Electropop, Dream pop </li>
										<li class="discover"><u>Record Label</u> <br/> 	EMI Australia, Capitol </li>
										<li class="discover"><u>Album</u> <br/> BLUE NEIGHBOURHOOD <br/>
									</ul>
						    </div>
						  </div>
						</div>

						<div id="title">
							<p style="color:white;">BLUE NEIGHBOURHOOD</p>
							<p><a href="" id="trailer" style="border-radius:4px;">LISTEN</a></p>
						</div>
					 </div>

					 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					 <br><br><br><br>

			</div>
		</div>
	</body>
</html>
