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
    $listOfDogs = array("King", "Duke", "Rex", "Chief", "Boss", "Spots");
    echoDogsInPs($listOfDogs);

    function echoDogsInPs($listOfDogs) {
      $listOfDogsLength = count($listOfDogs);
      for($i = 0; $i < $listOfDogsLength; $i++) {
       echo "<p>$listOfDogs[$i] is a good dog.</p>";
       echo "<br>";
      }
    }
  ?>
  
</body>
</html>