<!DOCTYPE html>
<html>
<head>
	<title>Activity 06</title>
</head>
<body>
		<h1>Activy 06</h1>

<p> Write a program which will count the "e" characters in the text "hivelabs technologies".  <br>
Count Letter: [e] <br>
Enter your Word: [ hivelabs technologies ] <br>

Total Letter Count: 3 <br> <br>

<form action="activity06.php" method="get">
      Count letter : 
      <input type="text" name="char1"><br> <br>
      Enter your word: 
      <input type="text" name="word1"><br>
      <button type="submit">Submit</button> <br> <br>



<?php
$text= $_GET['word1'];
$search_char= $_GET['char1'];
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo " Total Letter Count: $count <br>";
?>
		
</body>
</html>