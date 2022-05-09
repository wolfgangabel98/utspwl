<?php
include ("konek.php");
$id = $_GET['id'];
$hapus=mysqli_query($konek,"DELETE FROM pegawai WHERE id_pegawai='$id'");
if($hapus) {
	header("Location:index.php?z=pegawai");
}
?>