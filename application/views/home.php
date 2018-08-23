
<div class="row">
	<div class="col-md-12">
		<h2 align="center" class="judulbk"><b>TAMBAH Code</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- <div class="panel-heading">
				<label>Tambah Data Buku</label>
			</div> -->
			<div class="panel-body bgtable">
			<?php echo $alert;?>
				<form method="post" class="form-horizontal">

					<div class="form-group">
						<!-- <label class="control-label col-md-2" ></label> -->
						<div class="col-md-12">
							<input type="text" name="code"class="form-control" placeholder="Voucher Code" value="<?php echo $satu['code'];?>">
						</div>
					</div>

					<div class="form-group">
						<!-- <label class="control-label col-md-2"></label> -->
						<div class="col-md-12">
							<input type="text" name="status" class="form-control" placeholder="Status" disabled="true"> value="<?php echo $satu['status'];?>">
						</div>
					</div>

					
					<div class="form-group">
						<!-- <div class="col-md-2"> -->
							<input type="hidden" name="id" value="<?php echo $satu['id'];?>">
						<div class="col-md-12">
							
							<button type="submit" name="simpan" class="btn btn-info" value="Simpan">
					          <span class="glyphicon glyphicon-ok"></span> Simpan
					        </button>
							<a href="<?php echo site_url();?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</a>
						</div>
					</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>