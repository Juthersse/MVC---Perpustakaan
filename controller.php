<?php
include_once("model.php");
class Controller{
    public function __construct(){
        $this->model = new Model();
        $this->index();
    }
    public function index(){
        echo "<h1 style=text-align:center;>Perpustakaan</h1><hr><br>";
    }

    public function addAnggota($id,$nama,$email,$noTelepon){
        $xanggota = new Anggota($id,$nama,$email,$noTelepon);
        $this->model->insertAnggota($xanggota);
    }

    public function addKoleksi($id,$judul,$penulis,$jumlah){
        $xkoleksi = new Koleksi($id,$judul,$penulis,$jumlah);
        $this->model->insertKoleksi($xkoleksi);
    }

    public function addTransaksi($id,$anggota,$koleksi,$tanggalPeminjaman,$tanggalPengembalian){
        echo "Menambahkan Transaksi...<br>";
        $status = "Dipinjam";
        $xtransaksi = new Transaksi($id,$anggota,$koleksi,$tanggalPeminjaman,$tanggalPengembalian,$status);
        $this->model->insertTransaksi($xtransaksi);
    }

    public function viewAllAnggota(){
        echo "<h3>List Semua Anggota:</h3>";
        $this->model->getAnggota();
        echo "<hr>";
    }

    public function viewAnggota($rec){
        $this->model->findAnggota($rec);
    }

    public function viewAllKoleksi(){
        echo "<h3>List Semua Koleksi:</h3>";
        $this->model->getKoleksi();
    }

    public function viewKoleksi($rec){
        $this->model->findKoleksi($rec);
    }

    public function viewAllTransaksi(){
        echo "List Semua Transaksi:<br>";
        $this->model->getTransaksi();
    }

    public function viewTransaksi($rec){
        $this->model->findTransaksi($rec);
    }

    public function editAnggota($rec,$xanggota){
        echo "Update Anggota No. $rec...<br>";
        $this->model->updateAnggota($rec,$xanggota);
    }

    public function editKoleksi($rec,$xkoleksi){
        echo "Update Koleksi No. $rec...<br>";
        $this->model->updateKoleksi($rec,$xkoleksi);
    }

    public function editTransaksi($rec,$xtransaksi){
        echo "Update Transaksi No. $rec...<br>";
        $this->model->updateTransaksi($rec,$xtransaksi);
    }

    public function editStatus($rec,$xstatus){
      $this->model->updateStatus($rec,$xstatus);
    }

    public function deleteAnggota($rec){
      $this->model->destroyAnggota($rec);
    }

    public function deleteKoleksi($rec){
      $this->model->destroyKoleksi($rec);
    }

    public function deleteTransaksi($rec){
      $this->model->destroyTransaksi($rec);
    }
}
?>
