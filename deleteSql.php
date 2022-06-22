<?php
$nim = $_GET['nim'];

include "database.php";
include "mahasiswa.php";
$mhsHapus =new Mahasiswa();
$mhsHapus->deleteByNim($nim);
?>

<script type="text/javascript">
    window.location ="index.php"
</script>