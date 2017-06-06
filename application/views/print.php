<!DOCTYPE html>
<head>
	<title>Laporan</title>
	<style>
	table{
		border-collapse: collapse;
		width:100%;
		margin:0 auto;
	}
	table th{
		border:1px solid #000;
		padding: 3px;
		font-weight: bold;
		text-align: center;
	}
	table td{
		border: 1px solid #000;
		padding: 3px;
		vertical-align: top;
	}
	</style>
</head>
<table>
<tr>
	<td colspan="1" style="border:0px">
	<td align="center" style="border: 0px">
		<img src="Assets/poltek.png" width="120" height="120">
	</td>

	<td style="text-align : center; border:0px"colspan="">
	KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN<br>
	<br>POLITEKNIK NEGERI MALANG</b></br>
	Jl. Soekarno Hatta No.9 Malang 65141<br>
	Telp (0341) 404424 - 404425 Fax (0341) 404420<br>
	<a href="<?php echo base_url()?>http://www.polinema.ac.id/">http://www.polinema.ac.id</a>
</td>

	<td align="center" style="border: 0px">
		<img src="Assets/iso.jpg" width="120" height="120">
	</td>
</tr>

<tr>
	<td colspan="4" style="border:0px">
		<hr size="3" style="background-color: black"></hr>
		<h2><br><p style="text-align: center">Tabel Pegawai Polinema</p></b></h2>
</tr>
<br></br>
<br></br>

		<tr>
			<th>Nama</th>
			<th>Nip</th>
			<th>Tanggal</th>
			<th>Alamat</th>
			
		</tr>

		<?php $no=0; foreach($pegawai as $key){
			$no++;
			?>
			<tr>
				<td><?php echo $key->nama ?></td>
				<td><?php echo $key->nip ?></td>
				<td><?php echo $key->tanggal ?></td>
				<td><?php echo $key->alamat ?></td>
				<!-- <td><img src="<?php echo base_url()?>/Assets/upload/<?php echo $key->foto;?>" ></td> -->
			</tr>
			<?php }?>
		
	
</table>
	</html>