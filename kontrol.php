<?php
if (isset($_GET['z'])){
    switch ($_GET['z']){
        case 'keluar':
            include("keluar.php");
            break;
        case 'admin':
            include("admin.php");
            break;
        case 'tadmin':
            include("tadmin.php");
            break;
        case 'sadmin':
            include("sadmin.php");
            break;
        case 'hadmin':
            include("hadmin.php");
            break;
        case 'eadmin':
            include("eadmin.php");
            break;
        case 'uadmin':
            include("uadmin.php");
            break;
        case 'pegawai':
            include("pegawai.php");
            break;
        case 'tpegawai':
            include("tpegawai.php");
            break;
        case 'spegawai':
            include("spegawai.php");
            break;
        case 'hpegawai':
            include("hpegawai.php");
            break;
        case 'epegawai':
            include("epegawai.php");
            break;
        case 'upegawai':
            include("upegawai.php");
            break;
    }
}
else{
    echo  "<h4  class=mx-auto>WELCOME ADMIN</h4>";
}