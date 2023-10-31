<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>

   
    <a href="index.php">Kembali ke Home</a><br>
    <form action="tambah.php" method="post" name="form1">
<table border="1" width="25%">
    <tr>
        <td>NISN</td>
        <td><input type="text" name="nisn"></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>CITA-CITA</td>
        <td><input type="text" name="cita_cita"></td>
    </tr>
    <tr>
        <td>JENISKELAMIN</td>
        <td><input type="text" name="jnskelamin" id=""></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="TAMBAH"></td>
    </tr>
</table>
</form>
<?php

if (isset($_POST["submit"])){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $cita = $_POST['cita_cita'];
    $jnskelamin = $_POST['jnskelamin'];

    include_once("koneksi.php");

    $result = mysqli_query($mysqli, "INSERT INTO SISWA (NISN,NAMA,CITA_CITA,JNSKELAMIN) VALUE ('$nisn','$nama','$cita','$jnskelamin')");

}


?>
</body>
</html>