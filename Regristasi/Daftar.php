<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User</title>
	<style>
		tr:nth-child(even){
			background-color: darksalmon;
		}	
		</style>
</head>
<body>
    <table border="1" style="background-color : aquamarine;">
        <tr style="background-color : brown;">
            <td>Id User</td>
            <td>Nama User</td>
            <td>Aksi</td>
        </tr>
        <?php
    $arrayUsername[0][0] = "01";
    $arrayUsername[0][1] = "Ani";
    $arrayUsername[1][0] = "02";
    $arrayUsername[1][1] = "Beni";
    $arrayUsername[2][0] = "03";
    $arrayUsername[2][1] = "Cici";
    $arrayUsername[3][0] = "04";
    $arrayUsername[3][1] = "Diki";
    $arrayUsername[4][0] = "05";
    $arrayUsername[4][1] = "Eman";
    $var_temp= "";
    for ($i=0; $i<5; $i++) { 
    ?>
        <tr>
            <td><?php echo $arrayUsername[$i][0]; ?></td>
            <td><?php echo $arrayUsername[$i][1]; ?></td>
            <td> <a href="registrasi.php? blnlahir=mei & nama=<?php echo $arrayUsername[$i][1] ?>"><img src="image/edit.png" width=20></a>  
            <a href="registrasi.php? id=<?php echo $arrayUsername[$i][0] ?>"><img src="image/hapus.png" width=22></a>
			<a href="registrasi.php? id=<?php echo $arrayUsername[$i][0] ?>"><img src="image/view.png" width=20></a>
            </td>
        </tr>
        <?php 
    }
        ?>
        
    </table>
</body>
</html>