<?php
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
} 

//echo 'KODE : ' . $_POST["kode"];
//echo "NAMA BARANG : " . $_POST["namaBarang"];
//echo "STOK : " . $_POST["stok"];
$kode = $_POST["kode"];
$nama_barang = $_POST["namaBarang"];
$stok = $_POST["stok"];
$query = "insert into stok_barang values('$kode','$nama_barang','$stok')";

//echo "<br>".$query;
if($koneksi->query($query) === true) {
    echo "<br> Data " . $_POST["namaBarang"] . " berhasil disimpan." .
            ' <a href="main.php">Lihat Data</a>';
} else {
    echo "<br>Data GAGAL disimpan";
}

$koneksi->close();
?>