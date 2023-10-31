<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM SISWA");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data CRUD Sederhana</title>
</head>
<body>
    
 <a href="tambah.php">Tambah Data</a><br>

    <table border="2" width="80%">
        <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Cita-cita</th>
            <th>Jenis Kelamin</th>
            <th>EDIT/DELETE</th>
        </tr>
        <?php
        while($data_siswa = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$data_siswa['NISN']."</td>";
            echo "<td>".$data_siswa['NAMA']."</td>";
            echo "<td>".$data_siswa['CITA_CITA']."</td>";
            echo "<td>".$data_siswa['JNSKELAMIN']."</td>";
            echo "<td><a href='edit.php?nisn=$data_siswa[NISN]'>EDIT</a> | <a href='delete.php?nisn=$data_siswa[NISN]'>DELETE</a></td>";
            echo "</tr>";
        }
        ?>
    </table>    
</body>
</html>