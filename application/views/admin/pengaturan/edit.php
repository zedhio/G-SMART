<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Pengaturan</h3>
				</div>
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Pengaturan</label>
							<div class="col-sm-10">
								<input type="text" name="kolom_pengaturan" value="<?php echo $detail['kolom_pengaturan'] ?>" class="form-control" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea name="isi_pengaturan" class="form-control" rows="5"><?php echo $detail['isi_pengaturan'] ?></textarea>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right"><span class="fa fa-cloud-upload"></span> Simpan </button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>