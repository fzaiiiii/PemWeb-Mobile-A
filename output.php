<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user = $_REQUEST["user"];
		$pass = $_POST["pass"];
		$_user = strlen($user);
		$_pass = strlen($pass);
		$x = false;

		if ($_user > 7) {
			echo "Username harus kurang dari 7 karakter<br>";
			$x = true;
		}

		if (!preg_match("/[A-Z]/", $pass)) {
			echo "Password harus terdapat huruf kapital<br>";
			$x = true;
		}

		if (!preg_match("/[a-z]/", $pass)) {
			echo "Password harus terdapat huruf kecil<br>";
			$x = true;
		}

		if (!preg_match("/[0-9]/", $pass)) {
			echo "Password harus terdapat karakter khusu (angka)<br>";
			$x = true;
		}

		if ($_pass < 10) {
			echo "Password harus lebih dari 10 karakter<br>";
			$x = true;
		}

		if ($x == false) {
			echo "Username dan Password memenuhi syarat";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
 <a href="zaii.php">Kembali Ke Menu
 	<br>
 <a href="zaii.php">Log out</a>
</body>
</html>

