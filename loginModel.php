<?php
class Login
{
    public function __construct($username, $password)
    {
        $database = new Database();
        $query = "select * from user 
                  where username='$username' 
                  and password='$password' ";
        $result = $database->getLink()->query($query);
        
        while ($row = $result->fetch_row())
        {
            $_SESSION['username'] = $row[0];
            $_SESSION['password'] = $row[1];
            $_SESSION['tipeUser'] = $row[2];
            $_SESSION['namaUser'] = $row[3];
        }

        $database->closeDb();
    }
}
?>