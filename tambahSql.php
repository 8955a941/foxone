<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];

    include "database.php";
    include "mahasiswa.php";
    $mhsTambah = new Mahasiswa($nim, $nama, $umur);
    $mhsTambah->addToMysql();
?>

<script type="text/javascript">
    window.location = "index.php";
</script>