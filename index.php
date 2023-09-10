<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.classless.min.css">
	
    <title>Fibanacci</title>
</head>
<body>

<H1>Fibonacci Number</H1><P></P>
<h3>Enter number:</h3>
<form action="index.php" method="post">
<input type="text" name="subject" id="subject" value="">
<button type="submit" name="ok">OK</button>
</form>

</body>

<?php

function isPerfectSquare($x)
{
    $s = (int)(sqrt($x));
    return ($s * $s == $x);
}

function isFibonacci($n)
{
    return isPerfectSquare(5 * $n * $n + 4) ||
           isPerfectSquare(5 * $n * $n - 4);
}

if(isset($_POST['ok']))
{
	$value = $_POST['subject'];
	if(isFibonacci($value)) {
		echo "<p>Is a Fibonacci number</p>";
	}
	else {
		echo "<p>Is not Fibonacci number</p>";
	}
}

?>



