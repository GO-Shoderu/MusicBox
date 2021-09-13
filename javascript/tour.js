$(document).ready(function(){

  //this is for making sure we know where we are on the website
  var bar = $(".link");
  var hide = $("#hidden").attr( "value" );

  console.log(bar.length);
  console.log(hide);

  bar[hide-1].setAttribute("id", "active");

  });
