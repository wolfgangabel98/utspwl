<?php
include("konek.php");
$nama_pegawai= $_POST['txtPegawai'];
$alamat= $_POST['txtAlamat'];
$jenis_kelamin= $_POST['kelamin'];
$agama= $_POST['txtAgama'];

$simpan= mysqli_query($konek,"INSERT into pegawai(nama_pegawai, alamat, jenis_kelamin, agama)
	values('$nama_pegawai','$alamat','$jenis_kelamin','$agama')") or die (mysqli_error());
if ($simpan) {
	header("Location:index.php?z=pegawai");
}