<section class="content-header">
	<h1>
		Multimedia
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Multimedia</h3>
				</div>
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Multimedia</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="judul" placeholder="Contoh : Bukupaket.com" value="<?php echo $multimedia['judul']; ?>">
								<?php echo form_error('judul','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Kelas</label>
							<div class="col-sm-10">
								<select name="kelas" class="form-control">
									<option value="">- Pilih Kelas -</option>
									<?php foreach ($kelas as $key => $value): ?>
										<option value="<?php echo $value ?>" <?php if($multimedia['kelas']==$value){echo "selected";} ?>><?php echo $value; ?></option>
									<?php endforeach ?>
								</select>
								<?php echo form_error('kelas','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Topik</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="topik" placeholder="Contoh : Buku Sekolah" value="<?php echo $multimedia['topik']; ?>">
								<?php echo form_error('topik','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Url</label>
							<div class="col-sm-10">
								<input type="url" class="form-control" name="url" placeholder="Contoh : https://www.bukupaket.com/" value="<?php echo $multimedia['url']; ?>">
								<?php echo form_error('url','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea name="deskripsi" class="form-control" id="editor"><?php echo $multimedia['deskripsi']; ?></textarea>
								<?php echo form_error('deskripsi','<div class="text-danger">','</div>'); ?>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label">Kata Kunci</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="kata_kunci" placeholder="Contoh : BSE, Buku Guru, Kelas 1, Tema 8, Peristiwa alam" value="<?php echo $multimedia['kata_kunci']; ?>">
								<?php echo form_error('kata_kunci','<div class="text-danger">','</div>'); ?>
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