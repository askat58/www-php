<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/main.css" />
  <title>Document</title>
</head>
<body>

  <form action="site.php">
    Color: <input type="text" name="color"> <br>
    Plural Noun: <input type="text" name="pluralNoun"> <br>
    Celebrity: <input type="text" name="celebrity"> <br>
    <input type="submit">
  </form>

  <?php
  /*http://localhost:4000/Desktop/Projects/www-php/dist/site.php*/
  $color = $_GET["color"];
  $pluralNoun = $_GET["pluralNoun"];
  $celebrity = $_GET["celebrity"];
  echo "Roses are $color <br>";
  echo "$pluralNoun are blue <br>";
  echo "I love $celebrity";
  ?>
</body>
</html>