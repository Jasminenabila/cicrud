<!DOCTYPE html>
<html>
<head>
	<title>Codee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"/>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>
	<div class="col-md-12">
		<h2 align="center" class="judulbk"><b>Data Voucher Code</b></h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<a href="<?php echo site_url('Code/view_tambah');?>" class="btn btn-info pull-left"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope "col">No</th>
					<th scope "col">Voucher Code</th>
					<th scope "col">Status</th>
					<th scope "col">Detail Status</th>
					<th scope "col">Aksi</th>
				</tr>
			</thead>
			<?php $n=1;?>
			
			<tbody>
				<?php foreach ($code as $value): ?>
				<?php if($value->status ==1 ): ?>
				<tr style = "background:##96acce">
				<?php elseif ($value->status == 0):?>
				<tr>
                <?php endif;?>
				<td><?=$n++;?></td>
				<td><?=$value->redeemcode;?></td>
				<td><?=$value->status;?></td>
				<?php if($value->status == 0): ?>
				<td style="text-align:center"><a href="<?=base_url()?>index.php/Code/openitem/<?=$value->id?>">NonActive</a></td>
				<?php elseif($value->status == 1): ?>
				<td style="text-align:center"><a href="<?=base_url()?>index.php/Code/closeitem/<?=$value->id?>">Active</a></td>
				<?php endif;?>
				<?php if($value->status == 0):?>
				<td style="text-align:center"><a href="<?=base_url()?>index.php/Code/openitem/<?=$value->id?>">Gunakan Code</a></td>
				<?php elseif($value->status = 1):?>
				<td style="text-align:center"><a href="<?=base_url()?>index.php/Code/closeitem/<?=$value->id?>">Tutup Code</a></td>
				<?php endif;?>
				<td>
				<a href="<?php echo site_url('Code/delete/'.$value->id);?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
				</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>

