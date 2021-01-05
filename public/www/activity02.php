<!DOCTYPE html>
<html>
<head>
  <title>Activity loop 02</title>
</head>
<body>
    <h2>Activity loop 02</h2>
    <h4>Create a script using a for loop to add all the integers between 0 and 30 and display the total.</h4>

    <form action="activity02.php" method="get">
      Enter number between 0 to 30 : <br>
      <input type="number" name="num1"><br>
      <button type="submit">Sum</button>


<?php
    $sum = $_GET['num1'];
  
    for($x=1; $x<=30; $x++){
    $sum +=$x;

  }

    echo "The sum of the numbers 0 to 30 is $sum";

    ?>

    </form>

    
</body>
</html>