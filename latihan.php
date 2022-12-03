<?php

class Siswa


{
    public $Nama = "Rizaldi";
    private const Kelas = "11";
    public static $Jurusan = "RPL";
    
    function __construct($Jurusan)
    {
        self::$Jurusan = $Jurusan;
    }

    public function setNamaSiswa($Nama)
    {
        $this->Nama = $Nama;
    }

    public function getNamaSiswa()
    {
        return $this->Nama;
    }

    function __destruct()
    {
        echo 'Nama : ' . $this->Nama . '<br>';
        echo 'Kelas : ' . self::Kelas . '<br>';
        echo 'Jurusan : ' . self::$Jurusan . '<br>';
    }
}
