<?php
class Database
{
    private $serverName = "localhost";
    private $serverUser = "root";
    private $serverPass = "";
    private $dbName     = "bb201";

    private $link;

    public function __construct()
    {
        $this->link = new mysqli($this->serverName, $this->serverUser,
                                 $this->serverPass, $this->dbName);
    }

    public function getLink()
    {
        return $this->link;
    }

    public function closeDb()
    {
        $this->link->close();
    }


}

?>