<html>
<?php
	$arrayKota[0] = "Aceh";
	$arrayKota[1] = "Yogyakarta";
	$arrayKota[2] = "Bandung";
	$arrayKota[3] = "Semarang";
	$var_temp="";
		for($i=0; $i<4; $i++){
			$var_temp = $var_temp."<option value=".$arrayKota[$i].">".$arrayKota[$i]."</option>";
		}
?>
<?php 
$var_tgl="";
	for($i=1; $i<32; $i++){
			$var_tgl = $var_tgl."<option value=".$i.">".$i."</option>";
		}
		
$var_thn="";
	for($i=1950; $i<2006; $i++){
			$var_thn = $var_thn."<option value=".$i.">".$i."</option>";
		}
		
	
?>

<head>
    <title>Registrasi</title>
</head>
<body>
    <form action="contact.php" method="POST">
        <fieldset>
        <legend>Registrasi</legend>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Username..." />
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Your email..." />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Passowrd..." />
        </p>
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option><option value="Katolik">Katolik</option><option value="Konghuchu">Konghuchu</option>

            </select>
        </p>
		<p>
            <label>Kota:</label>
            <select name="kota">
                <?php echo  $var_temp; ?>
            </select>
        </p>
		
<?php
	$arrBulan = array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
	$var_bln="";
	foreach ($arrBulan as $value) {
			$var_bln = $var_bln."<option value=".$value.">".$value."</option>";
	}
	?>
		<p>
            <label>Tanggal Lahir:</label>
            <select name="tanggal">
                <?php echo  $var_tgl; ?>
            </select>
			<select name="bulan">
                <?php echo  $var_bln; ?>
            </select>
			<select name="tahun">
                <?php echo  $var_thn; ?>
            </select>
        </p>
        <p>
            <label>Biografi:</label>
            <textarea name="biografi"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>