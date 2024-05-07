<?php
class Koleksi {
    private $id;
    private $judul;
    private $penulis;
    private $jumlah;

    public function __construct($xid, $xjudul, $xpenulis, $xjumlah) {
        $this->id = $xid;
        $this->judul = $xjudul;
        $this->penulis = $xpenulis;
        $this->jumlah = $xjumlah;
    }

    public function printAllKoleksi(){
      echo "<li><p>" .$this->judul. " - " .$this->penulis. "</p>
            <p>Stok : " .$this->jumlah. "</p></li><hr>";
    }

    public function printKoleksi(){
      echo "<p>" .$this->judul. " - " .$this->penulis. "</p>".
           "<p>Stok : " .$this->jumlah. "</p><hr>";
    }
}
