<!DOCTYPE HTML>
<html>

<head>

</head>

<body>
	<!-- FORM -->
	<h2>FORM TEST 1</h2>
	<form method="post" action="<?= $_SERVER["PHP_SELF"]; ?>">
		Input: <input type="number" name="input" value="<?= $number; ?>" required>
		<br><br>
		<input type="submit" name="submit" value="Generate">
	</form>

	<?php
	/**
	 * Declare Number Variables
	 */
	$number =  "";

	/**
	 * Check POST Form Method
	 */
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		generate_test($number = $_POST['input']);
	}

	/**
	 * Generate Testing Input
	 */
	function generate_test($number)
	{
		echo "<br>";
        echo "<h3> Result : </h3>";
		for ($a = $number; $a > 0; $a--) {
			for ($i = 1; $i <= $a; $i++) {
				echo "&nbsp;";
			}
			for ($a1 = $number; $a1 >= $a; $a1--) {
				echo "*";
			}
			echo "<br>";
		}
	}
	?>
</body>

</html>