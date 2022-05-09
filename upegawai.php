<?php
include("KONEK.php");
$nama_pegawai= $_POST['txtMahasiswa'];
$alamat= $_POST['txtAlamat'];
$jenis_kelamin= $_POST['kelamin'];
$agama= $_POST['txtAgama'];
$simpan= mysqli_query($konek,"UPDATE pegawai SET nama_pegawai='$nama_pegawai', alamat='$alamat',
 jenis_kelamin='$jenis_kelamin', agama='$agama' WHERE id_pegawai='$kode'");
if ($simpan) {
	header("Location:index.php?z=pegawai");
}
?>