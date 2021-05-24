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
<form action="site.php" method="get">
 <label for="num1">Liczba 1: </label><input type="number" name="num1">
  <br>
  <label for="num2">Liczba 2: </label><input type="number" name="num2">
  <br>
  <input type="submit">
</form>


 Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
</body>
</html>