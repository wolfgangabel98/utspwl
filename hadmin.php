<?php
include ("konek.php");
$id = $_GET['id'];
$hapus=mysqli_query($konek,"DELETE FROM admin WHERE id='$id'") or die (mysqli_error());
if($hapus) {
	header("Location:index.php?z=admin");
}