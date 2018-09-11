<?php
include 'koneksi.php';

if (isset($_post)) {
	$sql = "update biodata set nama = '$_post[nama]',
									jenis_kelamin = '$_post[jenis_kelamin]',
									alamat = '$_post[alamat]',
									no_hp = '$_post[no_hp]',
								where id = '$_post[id]'";
	$dbh->exec($sql);
}

header("location:index.php");
?>