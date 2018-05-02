<?php 
include "koneksi.php";

$koneksiobj = new Koneksi();
$koneksi = $koneksiobj->getkoneksi();

if ($koneksi->connect_error) {
	echo "Gagal Koneksi : " . $koneksi->connect_error;
}else{
	echo "Sambungan data Berhasil";
}

$qry = "delete from stok_barang where kode" . $_GET["kode"];

if($koneksi->query($qry)=== true)
{
echo "<br> Data kode ".$_GET["kode"].
	"Berhasil dihapus".
	'<a href = "main.php">lihat Data</a>';
}
else
{
    echo "<br>Data gagal disimpan";
}

 ?>