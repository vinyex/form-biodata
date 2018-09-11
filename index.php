<?php
include 'koneksi.php';
?>
<style>
	tbody> tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
		background-color: #e2dd1d;
	}
	table{
		width: 70%;
		margin: auto;
		border-collapse: collapse;
		box-shadow: darkgrey 3px;
	}
	thead tr{
		background-color: #f2740d;
	}
</style>
<h1 align="center"> Tabel Biodata <a href="input.php"> >> </a></h1>

<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>No HP</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
			$sql = "select * from biodata order by id";
			$no = 1;
			foreach ($dbh->query($sql) as $data) :
		?>
			<tr>
				<td>
					<?php
					echo $no++
					?>
				</td>
				<td>
					<?php
					echo $data['nama']
					?>
				</td>
				<td>
					<?php
					echo $data['jenis_kelamin']
					?>
				</td>
				<td>
					<?php
					echo $data['alamat']
					?>
				</td>
				<td>
					<?php
					echo $data['no_hp']
					?>
				</td>
			</tr>
		<?php
		endforeach;
		?>
	</tbody>
</table>