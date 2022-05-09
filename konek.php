<?php
$konek=mysqli_connect("localhost","root","","karyawann");
if (mysqli_connect_errno()){
    
    echo "koneksi gagal" . mysqli_connect_error();
}
?>