<?php
class Transaksi {
    private $id;
    private $anggota;
    private $koleksi;
    private $tanggalPeminjaman;
    private $tanggalPengembalian;
    private $status; // 'Dipinjam', 'Dikembalikan', 'Terlambat'

    public function __construct($xid, $xanggota, $xkoleksi, $xtanggalPeminjaman, $xtanggalPengembalian, $xstatus) {
        $this->id = $xid;
        $this->anggota = $xanggota;
        $this->koleksi = $xkoleksi;
        $this->tanggalPeminjaman = $xtanggalPeminjaman;
        $this->tanggalPengembalian = $xtanggalPengembalian;
        $this->status = $xstatus;
    }

    public function printAllTransaksi(){
      echo "<li><p>Nama Peminjam : " .$this->anggota. "</p>
           <p>Judul Koleksi : " .$this->koleksi. "</p>
           <p>Tanggal Peminjaman : " .$this->tanggalPeminjaman. "</p>
           <p>Tanggal Pengembalian : " .$this->tanggalPengembalian. "</p>
           <p>Status : " .$this->status. "</p></li>";
    }

    public function printTransaksi(){
      echo "<p>Nama Peminjam : " .$this->anggota. "</p>
           <p>Judul Koleksi : " .$this->koleksi. "</p>
           <p>Tanggal Peminjaman : " .$this->tanggalPeminjaman. "</p>
           <p>Tanggal Pengembalian : " .$this->tanggalPengembalian. "</p>
           <p>Status : " .$this->status. "</p>";
    }

    public function changeStatus($xstatus){
      $this->status = $xstatus;
    }
}
