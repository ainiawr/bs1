<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


	<legend> Edit Data Pegawai </legend>

	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('pegawai/update/'.$this->uri->segment(3));?>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pegawai[0]->nama?>" placeholder="Nama">
		<label for="">NIP</label>
		<input type="text" name="nip" class="form-control" id="nip" value="<?php echo $pegawai[0]->nip?>" placeholder="NIP">
		<label for="">Tanggal</label>
		<input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $pegawai[0]->tanggal?>" placeholder="Tanggal" >
		<label for="">Alamat</label>
		<input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $pegawai[0]->alamat?>" placeholder="Alamat">
		<div class="form-group">
			<label class="control-label col-sm-2" for="">Foto</label>
			<div class="col-sm-10">
			<img src=<?=base_url("Assets/upload")."/".$pegawai[0]->foto?>>
			<input type="file" name="userfile" size="20" >
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
	
</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
