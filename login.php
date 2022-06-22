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
<h2 style="margin-bottom: 20px;"> Login</h2>
<form action="loginSql.php" method="post">
    username : <input type="text" name="username">
    <br>
    password : <input type="password" name="password">
    <br>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
</form>
</div>
   
</body>
</html>