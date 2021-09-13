<?php
  echo '<div id="header" class="headerColorCategory">';

    // <!-- navigation side of the head-->
    echo '<div id = "rightContentOfHeader" style="height:53px;">';
      echo '<a href="./index.php">';
        echo '<span id="logoAtHeader">';
          echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
          echo '<img src="logo/LG_u.png" class = "logo" alt="Moviebox Logo">';
        echo '</span>';
      echo '</a>';
      echo '<nav>';
        echo '<ul class="nav">';
          echo '<li class="links"><a href="./calendar.php" class="link" id="">Calender</a></li>';
          echo '<li class="links"><a href="./tour.php" class="link" id="">Tour</a></li>';
          echo '<li class="links"><a href="./featured.php" class="link" id="">Featured</a></li>';
          echo '<li class="links"><a href="./topRated.php" class="link" id="">Top Rated</a></li>';
          echo '<li class="links"><a href="./newReleases.php" class="link" id="">New Releases</a></li>';
          echo '<li class="links"><a href="./trending.php" class="link" id="">Trending</a></li>';
          echo '<li class="links"><a href="./index.php" class="link" id="">Home</a></li>';
          // echo '<li class="mine"><a href="./signup.php" >Register</a></li>';

          // if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == "true")
          // {
          //
          //     console.log("I am loggedIn");
            echo '<li class="mine"><a href="./login.php" >Logout</a></li>';
          // }else{
          //   console.log("I am loggedOut");
            // echo '<li class="mine"><a href="./login.php" >Login</a></li>';
          // }
        echo '</ul>';
    echo '</nav>';
    echo '</div>';

  echo '</div>';
?>
