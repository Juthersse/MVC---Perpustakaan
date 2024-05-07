<?php
include_once('controller.php');
$cm = new Controller();
$cm->addKoleksi("1","No Longer Human","Osamu Dazai","8");
$cm->addKoleksi("2","Demian","Herman Hesse","11");
$cm->addKoleksi("3","The Moon Over the Mountain","Atsushi Nakajima","7");
$cm->addKoleksi("4","The Metamorphosis","Franz Kafka","10");
$cm->addKoleksi("5","Strait is the Gate","André Gide","6");
$cm->addKoleksi("6","First Love","Ivan Turgenev","9");
$cm->addKoleksi("7","Somokuto","Santoka Taneda","5");
$cm->addKoleksi("8","The Miner","Natsume Sōseki","8");
$cm->addKoleksi("9","Notes from Underground","Fyodor Dostoyevsky","4");
$cm->addKoleksi("10","The Myth of Sisyphus","Albert Camus","7");
$cm->addKoleksi("11","Frankenstein","Mary Shelly","3");
$cm->addKoleksi("12","Alice's Adventures in Wonderland","Lewis Carol","6");
$cm->addKoleksi("13","The Little Prince","Antoine de Saint-Exupéry","2");
$cm->addKoleksi("14","The Works of Edgar Allen Poe","Edgar Allen Poe","5");
$cm->addKoleksi("15","Dogra Magra","Yumeno Kyūsaku","1");
$cm->addAnggota("1","Ali","Jl. SatuDuaTiga No. 1","12345678");
$cm->addAnggota("2","Budi","Jl. EmpatLimaEnam No. 2","09876543");
$cm->addAnggota("3","Cecep","Jl. TujuhDelapanSembilan No. 3","10293847");
$cm->viewAllAnggota();
$cm->viewAllKoleksi();
$cm->addTransaksi("1","Ali","No Longer Human","7 Mei 2024","14 Mei 2024");
$cm->addTransaksi("2","Ali","The Myth of Sisyphus","30 April 2024","6 Mei 2024");
$cm->editStatus("1","Dikembalikan");
$cm->viewAllTransaksi();
?>
