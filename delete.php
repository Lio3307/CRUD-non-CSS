<?php

include_once("koneksi.php");

$nisn = $_GET['nisn'];
$result = mysqli_query($mysqli, "DELETE FROM SISWA WhERE NISN=$nisn");
header("Location:index.php");

?>