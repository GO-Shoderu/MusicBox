$(document).ready(function(){

  $(".fM").hide();

  //trying to store the all the movie titles I have on the page initially
  var title = $(".movies").find("p.t");
  var artist = $(".movies").find("span.art");
  var img = $(".movies").find("img");



  //this is for making sure we know where we are on the website
  var bar = $(".link");
  var hide = $("#hidden").attr( "value" );
  
  console.log(bar.length);
  console.log(hide);

  bar[hide-1].setAttribute("id", "active");

  $(document).on("keyup", "#searchArea", function(event){
    // var keycode = (event.keyCode ? event.keyCode : event.which);

    if(event.keyCode == 13 || event.which == '13' || (event.keyCode >= 65 && event.keyCode <= 120) ||
            (event.which >= 65 && event.which <= 120)){
        $(".fM").show();

        var valSear = document.getElementById('searchArea').value;
        var myStr = valSear.split(' ').join('+');

        var page = 'https://cors-anywhere.herokuapp.com/https://ws.audioscrobbler.com/2.0/?method=track.search&track=' + myStr;
        var apiPlusFOrmat = '&api_key=28ec38044557cabba5650d62a611f9a0&format=json';

        page += apiPlusFOrmat;

        var req = new XMLHttpRequest();

        req.onreadystatechange = function()
        {
          if(req.readyState == 4 && req.status == 200){
            var values = JSON.parse(req.responseText);

            // console.log(values);

            for (var i = 0; i < title.length; i++) {
              title[i].innerHTML = values.results.trackmatches.track[i].name;
              console.log(values.results.trackmatches.track[i].name);
              artist[i].innerHTML = values.results.trackmatches.track[i].artist;
              img[i].setAttribute("src", values.results.trackmatches.track[i].image[3]["#text"]);
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

    }

    event.preventDefault();
  });

  $("#seA").click(function(){
    $(".fM").show();

    var valSear = document.getElementById('searchArea').value;
    var myStr = valSear.split(' ').join('+');

    var page = 'https://cors-anywhere.herokuapp.com/https://ws.audioscrobbler.com/2.0/?method=track.search&track=' + myStr;
    var apiPlusFOrmat = '&api_key=28ec38044557cabba5650d62a611f9a0&format=json';

    page += apiPlusFOrmat;

    var req = new XMLHttpRequest();

    req.onreadystatechange = function()
    {
      if(req.readyState == 4 && req.status == 200){
        var values = JSON.parse(req.responseText);

        // console.log(values);

        for (var i = 0; i < title.length; i++) {
          title[i].innerHTML = values.results.trackmatches.track[i].name;
          console.log(values.results.trackmatches.track[i].name);
          artist[i].innerHTML = values.results.trackmatches.track[i].artist;
          img[i].setAttribute("src", values.results.trackmatches.track[i].image[3]["#text"]);
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

});
