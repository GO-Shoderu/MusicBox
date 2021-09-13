$(document).ready(function(){

  //this is for making sure we know where we are on the website
  var bar = $(".link");
  var hide = $("#hidden").attr( "value" );

  console.log(bar.length);
  console.log(hide);

  bar[hide-1].setAttribute("id", "active");

  var td = new Date();
  var cM = td.getMonth();
  var cY = td.getFullYear();
  var sY = document.getElementById("year");
  var sM = document.getElementById("month");

  //this is for making sure we know where we are on the website
  var bar = $(".link");
  var hide = $("#hidden").attr( "value" );
  // var attr = hide.attr("value");
  // console.log('hi');
  console.log(bar.length);
  console.log(hide);
  // console.log(attr);
  bar[hide-1].setAttribute("id", "active");

  var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

  var mNy = document.getElementById("mNy");
  calender(cM, cY);


  $("#next").click(function () {
        console.log("I got in here");
        cY = (cM === 11) ? cY + 1 : cY;
        cM = (cM + 1) % 12;
        calender(cM, cY);
    });

  $("#previous").click(function () {
        cY = (cM === 0) ? cY - 1 : cY;
        cM = (cM === 0) ? 11 : cM - 1;
        calender(cM, cY);
    });

    // var doc = new jsPDF();
    $(function () {
    var specialElementHandlers = {
      '#editor': function(element, renderer) {
        return true;
      }
    };

    $("#export").click(function () {
      var doc = new jsPDF();
       doc.fromHTML(
           $('#target').html(), 15, 15,
           { 'width': 170, 'elementHandlers': specialElementHandlers },
           function(){ doc.save('calendar.pdf'); }
       );
    });});

  $(".month").change(function () {
        cY = parseInt(sY.value);
        cM = parseInt(sM.value);
        calender(cM, cY);
    });

  function calender(month, year) {

      var fD = (new Date(year, month)).getDay();
      var dIm = 32 - new Date(year, month, 32).getDate();

      var tbl = document.getElementById("cb"); // body of the calendar

      // clearing all previous spots
      tbl.innerHTML = "";

      // filing data about month and in the page via DOM.
      mNy.innerHTML = months[month] + " " + year;
      sY.value = year;
      sM.value = month;

      // creating all spots
      var date = 1;
      for (var i = 0; i < 6; i++) {
          // creates a table row
          var row = document.createElement("tr");

          //creating individual spots, filing them up with data.
          for (var j = 0; j < 7; j++) {
            if (i === 0 && j < fD) {
                var spot = document.createElement("td");
                var spotText = document.createTextNode("");
                spot.appendChild(spotText);
                row.appendChild(spot);
            }
            else if (date > dIm) {
                break;
            }

            else {
                var spot = document.createElement("td");
                var spotText = document.createTextNode(date);

                // color td's date
                if (date === td.getDate() && year === td.getFullYear() && month === td.getMonth()) {
                    spot.setAttribute("style", "background-color:#FAF0E6;color:grey;");
                }

                spot.appendChild(spotText);
                row.appendChild(spot);
                date++;
            }
        }
         // appending each row into calendar body.
        tbl.appendChild(row);
      }
  }
});
