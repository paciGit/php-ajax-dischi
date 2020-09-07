<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>ajax-dischi</title>
</head>
<body>
  <header>
    <div class="container">
      <img src="img/logo.png" alt="logo">
    </div>
  </header>

  <div class="cds-container container">
    <!-- Disc template -->
  </div>

    <!-- TEMPLATE -->
    <script id="template" type="text/x-handlebars-template">
      <div class="cd">
        <img src="{{poster}}" alt="">
        <h3>{{title}}</h3>
        <span class="author">{{author}}</span>
        <span>{{genre}}</span>
        <span class="year">{{year}}</span>
      </div>
    </script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="script.js" charset="utf-8"></script>
</body>
</html>
