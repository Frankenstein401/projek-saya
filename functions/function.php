<?php
include "conn.php";
function insert(){
    global $conn;

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    $divisi = $_POST["divisi"];
    $alasan = $_POST["alasan"];


    $sql = "INSERT INTO siswa_tb VALUES(null, '$nama', '$email', '$telepon', '$divisi', '$alasan', null) ";
    mysqli_query($conn, $sql);
    echo 'vwegAUK';
}