<?php
include 'koneksi.php';

if(isset($_POST)){
	$sql="insert into biodata value('', '$_POST[nama]','$_POST[jenis_kelamin]','$_POST[alamat]','$_POST[no_hp]')";
	$dbh->exec($sql);
}

header("location:index.php");
?>