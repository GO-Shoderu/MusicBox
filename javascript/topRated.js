$(document).ready(function(){

  //this is for making sure we know where we are on the website
  var bar = $(".link");
  var hide = $("#hidden").attr( "value" );

  console.log(bar.length);
  console.log(hide);

  bar[hide-1].setAttribute("id", "active");

  //trying to store the all the movie titles I have on the page initially
  var title = $(".movies").find("p.t");
  var artist = $(".movies").find("span.art");
  var rank = $(".movies").find("span.rank");
  var img = $(".movies").find("img");


  var page = 'https://cors-anywhere.herokuapp.com/https://api.deezer.com/chart/0';

  console.log('we here again');

  var req = new XMLHttpRequest();

  req.onreadystatechange = function()
  {
    if(req.readyState == 4 && req.status == 200){
      var values = JSON.parse(req.responseText);

      console.log(values);

      for (var i = 0; i < title.length; i++) {
        title[i].innerHTML = values.tracks.data[i].title;
        artist[i].innerHTML = values.tracks.data[i].artist.name;
        rank[i].innerHTML = "#" + values.tracks.data[i].position + " / " + values.tracks.data.length;
        img[i].setAttribute("src", values.tracks.data[i].album.cover_xl);
        img[i].setAttribute("width", 285);
        img[i].setAttribute("height", 400);
        img[i].setAttribute("style", "opacity:0.7;border-radius:4px;");
      }

    }else{
      console.log('something is wrong here');
    }
  };

  req.open("GET", page, true);
  req.send();

});
