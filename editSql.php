<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];

include "database.php";
include "mahasiswa.php";
$mhsUpdate = new Mahasiswa($nim, $nama, $umur);
$mhsUpdate->updateData();
?>

<script type="text/javascript">
    window.location = "index.php";
</script>