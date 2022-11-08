<?PHP
session_start();
?>

<html>
<body>
<?php
    $_SESSION["nama"] = $_POST["nama"];
	$_SESSION["password"] = $_POST["password"];
	echo "Selamat datang" .$_SESSION["nama"]."Anda di halaman session 1";
?>	
    
</body>
</html>

<br>
<a href="Login.php">Kembali</a>
<br>
<a href="Session_2.php">Next</a>