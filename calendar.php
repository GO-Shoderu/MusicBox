<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Musicbox</title>
		<meta charset="UTF-8" />
		<meta name="Author" content="Gabriel Shoderu" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="logo/LG_u.png" sizes="any"/>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
		<script src="./javascript/calendar.js"></script>
	</head>
	<body>
		<div id="container">

			<?php
				require_once "./header.php";
			?>

			<input type="hidden" id="hidden" name="custId" value="1">



          <div><br/></div>
					<input type="hidden" id="hidden" name="custId" value="1">
          <br>
          <img class="MovieboxSearch" src="logo/Lg_Name_U.png" width="350" height="50" alt="Moviebox Image" />
          <br><br>

					<!-- <p><a href="" id="trailer" style="border-radius:4px;">WATCH</a></p> -->
					<!-- <p id="trailer" style="border-radius:4px;"><strong> Web page under construction</strong> </p> -->
					<div>
				    <div id="target">
				        <h3 id="mNy"></h3>
				        <table id="calendar" align="center">
				            <thead>
				            <tr>
				                <th>Sun</th>
				                <th>Mon</th>
				                <th>Tue</th>
				                <th>Wed</th>
				                <th>Thu</th>
				                <th>Fri</th>
				                <th>Sat</th>
				            </tr>
				            </thead>

				            <tbody id="cb">

				            </tbody>
				        </table>
								<br>
				        <div>
				            <button id="previous" style="border-radius:4px;">Previous</button>
										&nbsp;&nbsp;&nbsp;
				            <button id="next" style="border-radius:4px;">Next</button>
										&nbsp;&nbsp;&nbsp;
				            <button id="export" style="border-radius:4px;">Export</button>
				        </div>
				        <br/>
				        <form>
				            <label for="month">Jump To </label><br><br>
				            <select name="month" id="month" class="month" style="border-radius:4px;">
				                <option value=0>Jan</option>
				                <option value=1>Feb</option>
				                <option value=2>Mar</option>
				                <option value=3>Apr</option>
				                <option value=4>May</option>
				                <option value=5>Jun</option>
				                <option value=6>Jul</option>
				                <option value=7>Aug</option>
				                <option value=8>Sep</option>
				                <option value=9>Oct</option>
				                <option value=10>Nov</option>
				                <option value=11>Dec</option>
				            </select>


				            <label for="year"></label>
										<select name="year" id="year" class="month" style="border-radius:4px;">
					            <option value=1990>1990</option>
					            <option value=1991>1991</option>
					            <option value=1992>1992</option>
					            <option value=1993>1993</option>
					            <option value=1994>1994</option>
					            <option value=1995>1995</option>
					            <option value=1996>1996</option>
					            <option value=1997>1997</option>
					            <option value=1998>1998</option>
					            <option value=1999>1999</option>
					            <option value=2000>2000</option>
					            <option value=2001>2001</option>
					            <option value=2002>2002</option>
					            <option value=2003>2003</option>
					            <option value=2004>2004</option>
					            <option value=2005>2005</option>
					            <option value=2006>2006</option>
					            <option value=2007>2007</option>
					            <option value=2008>2008</option>
					            <option value=2009>2009</option>
					            <option value=2010>2010</option>
					            <option value=2011>2011</option>
					            <option value=2012>2012</option>
					            <option value=2013>2013</option>
					            <option value=2014>2014</option>
					            <option value=2015>2015</option>
					            <option value=2016>2016</option>
					            <option value=2017>2017</option>
					            <option value=2018>2018</option>
					            <option value=2019>2019</option>
					            <option value=2020>2020</option>
					            <option value=2021>2021</option>
					            <option value=2022>2022</option>
					            <option value=2023>2023</option>
					            <option value=2024>2024</option>
					            <option value=2025>2025</option>
					            <option value=2026>2026</option>
					            <option value=2027>2027</option>
					            <option value=2028>2028</option>
					            <option value=2029>2029</option>
					            <option value=2030>2030</option>
				        		</select>
							</form>
				    </div>
					</div>
    </div>
  </body>
</html>
