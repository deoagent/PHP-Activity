<!DOCTYPE html>
<html>
<head>
	<title>Activity 05</title>
</head>
<body>
		<h1>Activy 05</h1>

<p>Write a program to calculate and print the factorial of a number using a for loop. <br>
	The factorial of a number is the product of all integers up to and including that number, <br>
	so the factorial of 4 is 4*3*2*1= 24. <br> <br>

<form action="activity05.php" method="get">
      Enter Integer : <br>
      <input type="number" name="num1"><br>
      <button type="submit">Sum</button> <br> <br>

<?php
$n = $_GET['num1'];
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x";
?>
		
</body>
</html>