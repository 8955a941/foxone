<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container p-5 my-5 border text-center">
    <h2>Edit Data Mahasiswa</h2><br><br>
    <?php
        $nim = $_GET['nim'];
        include "database.php";
        include "mahasiswa.php";
        $mhsEdit = new Mahasiswa();
        $dataMhs = $mhsEdit->getDataByNim($nim);
    ?>
    <form action="editSql.php" method="post">
        nim  : <input type="text" name="nim" value="<?php echo $dataMhs[0][0] ?>"><br><br>
        nama : <input type="text" name="nama" value="<?php echo $dataMhs[0][1] ?>"><br><br>
        umur : <input type="number" name="umur" value="<?php echo $dataMhs[0][2] ?>"><br><br>
        <button type="submit" class="btn btn-primary btn-block">Edit Data</button>
    </form>

</div>
</body>
</html>