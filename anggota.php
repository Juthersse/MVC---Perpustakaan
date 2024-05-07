<?php
class Anggota {
    private $id;
    private $nama;
    private $alamat;
    private $noTelepon;

    public function __construct($xid, $xnama, $xalamat, $xnoTelepon) {
        $this->id = $xid;
        $this->nama = $xnama;
        $this->alamat = $xalamat;
        $this->noTelepon = $xnoTelepon;
    }

    public function printAllAnggota(){
      echo "<li><p>Nama     : " .$this->nama. "</p>
           <p>Alamat        : " .$this->alamat. "</p>
           <p>Nomor Telepon : " .$this->noTelepon. "</p></li>";
    }

    public function printAnggota(){
      echo "<p>Nama          : " .$this->nama. "</p>
            <p>Alamat        : " .$this->alamat. "</p>
            <p>Nomor Telepon : " .$this->noTelepon. "</p>";
    }
}
