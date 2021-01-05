<!DOCTYPE html>
<html>
<head>
	<title>Activity 03</title>
</head>
<body>
		<h1>Activy 03</h1>

<p>Create a script to construct the following pattern, using nested for loop.</p><br>

*<br>
* *<br>
* * *<br>
* * * *<br>
* * * * *<br> <br>


Answer: <br>

<code>
	
for($x=1;$x<=5;$x++)<br>
{<br>
   for ($y=1;$y<=$x;$y++)<br>
    {<br>
	 echo "*";<br>
	    if($y< $x)<br>
		 {<br>
		   echo " ";<br>
		 }<br>
     }<br>
 echo " ";
<br>}

</code>

<p>Result: </p><br>

<?php

for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}


?>

		
</body>
</html>