<!DOCTYPE html>
<html>
<head>
	<title>Activity 04</title>
</head>
<body>
		<h1>Activy 04</h1>

<p>Create a script to construct the following pattern, using a nested for loop.</p><br>

*<br>
* *<br>
* * *<br>
* * * *<br>
* * * * *<br>
* * * * *<br>
* * * *<br>
* * *<br>
* *<br>
*<br>


Answer: <br>

<code style ="border-color: gray;">
	
$n=5;<br>
for($i=1; $i<=$n; $i++)<br>
{<br>
for($j=1; $j<=$i; $j++)<br>
{<br>
echo ' * ';<br>
}
echo ' ';<br>
}<br><br><br>
for($i=$n; $i>=1; $i--)<br><br>
{<br>
for($j=1; $j<=$i; $j++)<br>
{<br>
echo ' * ';<br>
}<br>
echo ' ';<br>
}<br>
<br>}

</code>

<p>Result: </p><br>

<?php
$n=5;
for($i=1; $i<=$n; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '<br>';
}
for($i=$n; $i>=1; $i--)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '<br>';
}
?>

		
</body>
</html>