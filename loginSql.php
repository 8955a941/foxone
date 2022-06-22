<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

include "database.php";
include "loginModel.php";
$userLogin = new Login($username, $password);
?>

<script>
    window.location = "index.php";
</script>