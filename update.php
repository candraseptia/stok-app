<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->getKoneksi();
if($koneksi->connect_error)
    {
    echo "gagal koneksi : ".$koneksi->connect_error;
    }
else
    {
        echo "sambungan basis data berhasil";
    }
$query = "update stok_barang"." set nama_barang = '".$_POST["nama_barang"]."', stok = ".$_POST["stok"]." where kode = ".$_POST["kode"];
    
if($koneksi->query($query)==true)
{
echo "<br> Data".$_POST["namabarang"]." berhasil disimpan".
'<a href = "main.php">lihat Data</a>';
}
else
{
    echo "<br>Data gagal disimpan";
}
?>