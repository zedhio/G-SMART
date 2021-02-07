<section class="content-header">
	<h1>
		Blog
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Blog</h3>
				</div>
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<label class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="judul" placeholder="Contoh : Buku Penilaian Harian Kurikulum 2013 Revisi" value="<?php echo $blog['judul'] ?>">
								<?php echo form_error('judul','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Isi</label>
							<div class="col-sm-10">
								<textarea name="isi" class="form-control" id="editor"><?php echo $blog['isi'] ?></textarea>
								<?php echo form_error('isi','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Cover Blog</label>
							<div class="col-sm-10">
								<img src="<?php echo base_url("pengunjung/blog/".$blog['gambar']) ?>" alt="<?php echo $blog['gambar']; ?>" width="150">
								<br/><br>
								<input type="file" name="gambar">
								<?php echo form_error('gambar','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

					</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right"><span class="fa fa-cloud-upload"></span> Ubah </button>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>