<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Php version-ajax-dischi</title>

    <?php
        include "api.php";
     ?>
</head>
<body>
  <header>
    <div class="container">
      <img src="img/logo.png" alt="logo">
    </div>
  </header>

  <div class="cds-container container">
    <!-- PHP -->
    <?php
      foreach ($disco as $album) {
        echo "<div class='cd'>";
            echo '<img src="' . $album["poster"] . '"/>';
            echo "<h3>" . $album["title"] . "</h3>";
            echo "<span class='author'>" . $album["author"] . "</span>";
            echo "<span>" . $album["genre"] . "</span>";
            echo "<span class='year'>" . $album["year"] . "</span>";
            echo "</div>";
        }
    ?>
  </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="script.js" charset="utf-8"></script>
</body>
</html>
