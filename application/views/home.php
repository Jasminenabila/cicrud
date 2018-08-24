<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"/>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>
	<div class="container">
		<h2> Tambahkan Data Voucher </h2>
		<p>  Tambah Kode Voucher Lainnya</p>
		<form method="post" class="form-horizontal" action="<?php echo base_url("index.php/Code/action_tambah") ?>">
			<div class="form-group">
			<label for = "redeemcode"> Kode Voucher : </label>
			<input type = "text" class="form-control" name="redeemcode" placeholder="Masukkan Kode Voucher" required="true">
			</div>
			<div class="col-md-12">	
				<button type="submit" name="simpan" class="btn btn-success" value="Simpan">
				<span class="glyphicon glyphicon-ok"></span> Simpan
				</button>
				<a href="<?php echo site_url();?>" class="btn"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</a>
			</div>
		</form>
	</div>
</body>
</html>
