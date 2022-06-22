<?php
session_start();
if(! isset($_SESSION['username']))
{
    ?>
    <script>
        window.location = "login.php";
    </script>
    <?php
}
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home || Data Mahasiswa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    
    <body>
    <div class="container p-5 my-5 border text-center">
        <h1 style="margin-bottom: 1cm;">Data Mahasiswa</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Action</th>
            </thead>
            <tbody>
                <?php
                    include "database.php";
                    include "mahasiswa.php";
                    $stikom = new Mahasiswa();
                    $dataMahasiswa = $stikom->getAllData();
                    for ($i=0; $i<count($dataMahasiswa); $i++)
                    {
                        ?>
                            <tr>
                                <td><?php echo $dataMahasiswa[$i][0] ?></td>
                                <td><?php echo $dataMahasiswa[$i][1] ?></td>
                                <td><?php echo $dataMahasiswa[$i][2] ?></td>
                                <td><a href="formEdit.php?nim=<?php echo $dataMahasiswa[$i][0] ?>" class="btn btn-primary btn-sm">Edit</a> 
                                     <a href="deleteSql.php?nim=<?php echo $dataMahasiswa[$i][0] ?>" class="btn btn-primary btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php
                    }

                ?>
            </tbody>
    </table>
        <a href="tambah.php" class="btn btn-success">Tambah</a>
        </div>
    </div>
    </body>
</html>