<?php
  include_once('anggota.php');
  include_once('koleksi.php');
  include_once('transaksi.php');

  class Model{
    private $anggota = array();
    private $koleksi = array();
    private $transaksi = array();

    public function insertAnggota($xanggota){
      $this->anggota[] = $xanggota;
    }

    public function insertKoleksi($xkoleksi){
      $this->koleksi[] = $xkoleksi;
    }

    public function insertTransaksi($xtransaksi){
      $this->transaksi[] = $xtransaksi;
      echo "Transaksi baru berhasil ditambahkan!<hr>";
    }

    public function getAnggota(){
      echo "<ol>";
      foreach($this->anggota as $xanggota){
        $xanggota->printAllAnggota();
      }
      echo "</ol>";
    }

    public function findAnggota($rec){
      $this->anggota[$rec]->printAnggota();
    }

    public function getKoleksi(){
      echo "<ol>";
      foreach($this->koleksi as $xkoleksi){
        $xkoleksi->printAllKoleksi();
      }
      echo "</ol>";
    }

    public function findKoleksi($rec){
      $this->koleksi[$rec]->printKoleksi();
    }

    public function getTransaksi(){
      echo "<ol>";
      foreach($this->transaksi as $xtransaksi){
        $xtransaksi->printAllTransaksi();
      }
      echo "</ol>";
    }

    public function findTransaksi($rec){
      $this->transaksi[$rec]->printTransaksi();
    }

    public function updateAnggota($rec,$xanggota){
      $this->anggota[$rec] = $xanggota;
      echo "Data anggota berhasil diubah!<hr>";
    }

    public function updateKoleksi($rec,$xkoleksi){
      $this->koleksi[$rec] = $xkoleksi;
      echo "Data transaksi berhasil diubah!<hr>";
    }

    public function updateTransaksi($rec,$xtransaksi){
      $this->transaksi[$rec] = $xtransaksi;
      echo "Data transaksi berhasil diubah!<hr>";
    }

    public function updateStatus($rec,$xstatus){
      $this->transaksi[$rec]->changeStatus($xstatus);
    }

    public function destroyAnggota($rec){
      unset($this->anggota[$rec]);
      echo "Data anggota berhasil dihapus!<hr>";
    }

    public function destroyKoleksi($rec){
      unset($this->koleksi[$rec]);
      echo "Data koleksi berhasil dihapus!<hr>";
    }

    public function destroyTransaksi($rec){
      unset($this->transaksi[$rec]);
      echo "Data transaksi berhasil dihapus!<hr>";
    }
  }
?>
