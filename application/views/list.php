<div class="row">
	<div class="col-md-12">
		<h2 align="center" class="judulbk"><b>DATA VOucher Code</b></h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<a href="<?php echo site_url('buku/form');?>" class="btn btn-info pull-left"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
		
		<table class="table table-hover">
			<thead>
				<tr class="info">
					<th>No</th>
					<th>Voucher Code</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $n=0;
				foreach($semua->result_array() as $d){ 
				$n++;?>
				<tr class="active">
					<td><?php echo $n;?></td>
					<td><?php echo $d['code'];?></td>
					<td><?php echo $d['status'];?></td>
					<td>
						<a href="<?php echo site_url('code/form/'.$d['id']);?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
						<a href="<?php echo site_url('code/hapus/'.$d['id']);?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>