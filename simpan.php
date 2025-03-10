<?php
include 'koneksi.php';

if(isset($_POST)){
        $stmt = $dbh->prepare("INSERT INTO biodata (nama, jenis_kelamin, alamat, no_hp) VALUES (:nama, :jenis_kelamin, :alamat, :no_hp)");
        $stmt->bindParam(':nama', $_POST['nama']);
        $stmt->bindParam(':jenis_kelamin', $_POST['jenis_kelamin']);
        $stmt->bindParam(':alamat', $_POST['alamat']);
        $stmt->bindParam(':no_hp', $_POST['no_hp']);
        $stmt->execute();
}

header("location:index.php");
?>
