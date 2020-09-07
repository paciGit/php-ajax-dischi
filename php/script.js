function init() {
   listDisco();
 }

function listDisco() {
$.ajax ({
  url: "api.php",
  method: "GET",
  success: function (data) {
    printDisco(data);
  },
  error: function () {
    alert("Error!");
  }
 });
}

function printDisco(data) {
  // Creo il clone
  var source = $("#template").html();
  var template = Handlebars.compile(source);
  // Ciclo for per generare i dischi
  for (var i = 0; i < data.length; i++) {
    var dischi = data[i];
    var context = {
    poster: dischi.poster,
    title: dischi.title,
    author: dischi.author,
      genre: dischi.genre,
      year: dischi.year
    };
    // Stampo l'input a schermo
    var html = template(context);
    $(".cds-container").append(html);
  }
}


$(document).ready(init);
