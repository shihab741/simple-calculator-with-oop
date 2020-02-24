<?php

/**
 *
 * Simple calculator with object oriented php
 *
 * Coded by: Shihab Uddin Ahmed
 *
 */
$firstNumber = " ";
$secondNumber = " ";
$result = " ";

	if (isset($_POST['btn']))
		{
			require "SimpleCalculator.php";
			$simpleCalculator = new simpleCalculator;
			$result = $simpleCalculator->calculate($_POST);	

			$firstNumber = $_POST['firstNumber'];
			$secondNumber = $_POST['secondNumber'];
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h3>Simple calcultor with object oriented php</h3>
<strong>Coded by: </strong> Shihab Uddin Ahmed<br>

<br>
<hr>

<h4>Non numeric data will be converted to zero.</h4>
	<form method="post">
		<table>
			<tr>
				<td>First number:</td>
				<td><input type="text" name="firstNumber" value="<?php echo $firstNumber; ?>"></td>
			</tr>
			<tr>
				<td>Last number:</td>
				<td><input type="text" name="secondNumber" value="<?php echo $secondNumber; ?>"></td>
			</tr>
			<tr>
				<td>Result:</td>
				<td><input readonly value="<?php echo $result; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="btn" value="+">
					<input type="submit" name="btn" value="-">
					<input type="submit" name="btn" value="*">
					<input type="submit" name="btn" value="/">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>