<html>
<head>
<?php
session_start();
?>
    <title>Login</title>
</head>
<body>
    <form action="Session_1.php" method="POST">
        <fieldset>
        <legend>Login</legend>
		 <p>
            <label>Username :</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label>Password :</label>
            <input type="password" name="password" placeholder="Password..." />
        </p>
		<p>
            <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
	</form>
</head>
</html>