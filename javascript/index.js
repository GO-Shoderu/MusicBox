$(document).ready(function(){
  //trying to store the all the movie titles I have on the page initially
  var title = $(".movies").find("p.t");
  var img = $(".movies").find("img.moviesImage");

  //this is for making sure we know where we are on the website
  var bar = $(".link");
  var hide = $("#hidden").attr( "value" );

  console.log(bar.length);
  console.log(hide);

  bar[hide-1].setAttribute("id", "active");

});
