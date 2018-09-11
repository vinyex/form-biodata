<h1 align="center">Input Biodata</h1>
<fieldset style="width: 50%; margin: auto;">
	<legend>Form Input Biodata</legend>
	
	<form action="simpan.php" method="post">
		<p>
			Nama Lengkap<br>
			<input type="text" name="nama" required/>
		</p>
		<p>
			Jenis Kelamin<br>
			<input type="radio" name="jenis_kelamin" value="Laki-laki" id="Laki-laki"/>Laki-laki
			<input type="radio" name="jenis_kelamin" value="Perempuan" id="Perempuan"/>Perempuan
		</p>
		<p>
			Alamat Lengkap<br>
			<textarea name="alamat" cols="50" required></textarea>
		</p>
		<p>
			Nomor Handphone<br>
			<input type="text" name="no_hp" required/>
		</p>
		<p>
			<input type="submit" value="Simpan"/>
			<input type="reset" value="Reset" onclick="return confirm('hapus data')"/>
		</p>
	</form>
	
</fieldset>

<center><a href="index.php"> Tabel Biodata</a></center>