<?php
class Mahasiswa
{
    private $nim;
    private $nama;
    private $umur;

    public function __construct($nim="", $nama="", $umur=0 )
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
    
    public function getNim()
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function toString()
    {
        return "Mahasiswa dengan nim " . $this->nim .
                " memiliki nama " . $this->nama .
                " berumur " . $this->umur;
    }

    public function addToMysql()
    {
        $database = new Database();
        $query = "insert into mahasiswa
                  values ('$this->nim', '$this->nama', $this->umur)";
        $result = $database->getLink()->query($query);
        $database->closeDb();
    }

    public function getAllData()
    {
        $dataMahasiswa = array();
        $database = new Database();
        $query = "select * from mahasiswa";
        $result = $database->getLink()->query($query);
        while ($row = $result->fetch_row())
        {
            $dataMahasiswa[] = $row;
        }

        $database->closeDb();
        return $dataMahasiswa;
    }

    public function deleteByNim($nim)
    {
        $database = new Database();
        $query = "delete from mahasiswa where nim='$nim' ";
        $result = $database->getLink()->query($query);
        $database->closeDb();
    }

    public function getDataByNim($nim)
    {
        $dataMahasiswa = array();

        $database = new Database();
        $query = "select * from mahasiswa where nim='$nim' ";
        $result = $database->getLink()->query($query);
        
        while ($row = $result->fetch_row())
        {
            $dataMahasiswa[] = $row;
        }

        $database->closeDb();
        return $dataMahasiswa;
    }

    public function updateData()
    {
        $database = new Database();
        $query = "update mahasiswa set nama= '$this->nama',
                  umur=$this->umur, nim=$this->nim where nim='$this->nim' ";
        $result = $database->getLink()->query($query);
        $database->closeDb();
    }

}

?>