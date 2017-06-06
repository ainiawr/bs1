<?php $this->load->view('partials/header');?>

<div class="container">
<div class="table-responsive">
<table class="table table-hover">
<tbody>

<tr><th colspan="4">Data Pegawai</th></tr>
	<tr>
		<td>Nama</td>
		<td>NIP</td>
		<td>Tanggal</td>
		<td>Alamat</td>
		<td>Foto</td>	
		<td>Option</td>
	</tr>
	<?php foreach ($biodata_object as $key) {?>
		<tr>
			<td><?php echo $key->nama ?></td>
			<td><?php echo $key->nip ?></td>
			<td><?php echo $key->tanggal."-".$key->bulan."-".$key->tahun ?></td>
			<td><?php echo $key->alamat ?></td>

			<td><img src="<?php echo base_url()?>/Assets/upload/<?php echo $key->foto;?>" ></td>

			<td><a href="<?=site_url()?>/pegawai/update/<?php  echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a>


			
			<a href="<?=site_url()?>/pegawai/delete/<?php  echo $key->id;?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
		</tr>
		<?php } ?>
</tbody>
</table>
</div>
</div>