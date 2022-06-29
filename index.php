<html>
<head>
<style>
.myDiv {
  background-color: white;
  height: 50%;
  width: 50%;
  overflow: hidden;
  word-wrap: break-word;
  overflow:scroll;
  font-family: Cursive;
  font-weight: bolder;
 }

 .myDiv2 {
  height: 80%;
  width: 70%;
  border:10px solid black;
  background-color:	#A0A0A0;
  font-family: Cursive;
  font-weight: bolder;
 }

input {
  text-align: center;
  font-weight: bolder;
  border:3px solid black;
  height: 7%;
  font-family: Cursive;
}


h1{
	font-family: Cursive;
	font-weight: bolder;
}

</style>

<title> Factorial Program</title>
</head>
<center> 
<body style="background-color:LightGray;">
<form method="POST">
<h1> Factorial Calculator </h1> 
<div class="myDiv2">
<p>&ensp;</p>
<input type="text" name="number" placeholder="Enter a number" />
<p></P> 
<input type="submit" name="submit" value="Submit" />
<p>&ensp;</p>

<div class="myDiv">
<p>&ensp;</p>
<?php
// PHP program to compute factorial
// of big numbers

if(isset($_POST['submit']))
if($_POST['submit'] == "Submit") {
$input = $_POST['number'];

// Maximum number of digits in output
$MAX = 500;

// This function finds factorial of
// large numbers and prints them
function factorial($n)
{
	global $MAX;
	$res = array_fill(0, $MAX, 0);

	// Initialize result
	$res[0] = 1;
	$res_size = 1;

	// Apply simple factorial formula
	// n! = 1 * 2 * 3 * 4...*n
	for ($x = 2; $x <= $n; $x++)
		$res_size = multiply($x, $res, $res_size);

	for ($i = $res_size - 1; $i >= 0; $i--)
		echo $res[$i];
}

// This function multiplies x with the number
// represented by res[].
// res_size is size of res[] or number of
// digits in the number represented by res[].
// This function uses simple school mathematics
// for multiplication. This function may value
// of res_size and returns the new value of res_size
function multiply($x, &$res, $res_size)
{
	$carry = 0; // Initialize carry

	// One by one multiply n with individual
	// digits of res[]
	for ($i = 0; $i < $res_size; $i++)
	{
		$prod = $res[$i] * $x + $carry;

		// Store last digit of 'prod' in res[]
		$res[$i] = $prod % 10;

		// Put rest in carry
		$carry = (int)($prod / 10);
	}

	// Put carry in res and increase
	// result size
	while ($carry)
	{
		$res[$res_size] = $carry % 10;
		$carry = (int)($carry / 10);
		$res_size++;
	}
	return $res_size;
}


// Driver Code
factorial($input);}
	
// This code is contributed by chandan_jnu
?>
</div>
</div>
</center> 
</form>
</body>
</html>