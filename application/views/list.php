<!DOCTYPE html>
<html>
<head>
	<title>Codee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"/>
</head>
<body>
	<div class="row">
	<div class="col-md-12">
		<h2 align="center" class="judulbk"><b>DATA VOucher Code</b></h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<a href="<?php echo site_url('code/home');?>" class="btn btn-info pull-left"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope "col">No</th>
					<th scope "col">Voucher Code</th>
					<th scope "col">Status</th>
					<th scope "col">Aksi</th>
				</tr>
			</thead>
			<?php $n=1;?>
			<?php if($item->status == 1):?>
<tr style="background:#469008">
<?php elseif($item->status = 0):?>
<tr>
<?php endif;?>
	<td><?=$x++;?></td>
	<td><?=$item->redeemcode;?></td>
	<td><?=$item->status;?></td>
	<?php if($item->status == 0):?>
	<td style="text-align:center"><a href="<?=base_url()?>Code/openitem/<?=$item->id?>">nonactive</a></td>
	<?php elseif($item->status = 1):?>
	<td style="text-align:center"><a href="<?=base_url()?>Code/closeitem/<?=$item->id?>">active</a></td>
	<?php endif;?>

	<?php if($item->status == 0):?>
	<td style="text-align:center"><a href="<?=base_url()?>Code/openitem/<?=$item->id?>">Buka Item</a></td>
	<?php elseif($item->status = 1):?>
	<td style="text-align:center"><a href="<?=base_url()?>Code/closeitem/<?=$item->id?>">Tutup Item</a></td>
	<?php endif;?>
	</tr>
	<?php endforeach;
	?>
		</table>
	</div>
</div>
</body>
</html>

