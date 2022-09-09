<?php
$host_db = "127.0.0.1";
$user_db = "root";
$pass_db = "";
$database = "apinative";

$koneksi = mysqli_connect($host_db, $user_db, $pass_db, $database);
if(!$koneksi){
    die(mysqli_connect_error());
}
// echo "Koneksi Berhasil";

?>