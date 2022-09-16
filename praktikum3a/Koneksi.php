<?php
$conn=mysqli_connect("localhost","root","","nebrazka");
//Cek Koneksi
if (mysqli_connect_errno()){
    echo"Koneksi database gagal".mysqli_connect_error();
}
// else {
//    echo"Koneksi database berhasil";
//}
?>