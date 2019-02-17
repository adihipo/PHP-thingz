<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php
  function listCatsAndTheirFavFoods($cat, $food) {
    echo "<p>$cat likes to eat $food.</p> <br>";
  }

  listCatsAndTheirFavFoods("Eustach", "chicken");
  listCatsAndTheirFavFoods("Lee", "anything");
?>
  
</body>
</html>