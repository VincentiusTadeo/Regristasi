<html>
<body>

Welcome <?php echo $_POST ["nama"]; ?><br>
Your email address is : <?php echo $_POST ["email"]; ?><br>
Jenis Kelamin : <?php echo $_POST ["jenis_kelamin"]; ?><br>
Agama : <?php echo $_POST ["agama"]; ?><br>
Tanggal lahir : <?php echo $_POST ["tanggal"].$_POST["bulan"].$_POST["tahun"]; ?><br>

</body>
</html>