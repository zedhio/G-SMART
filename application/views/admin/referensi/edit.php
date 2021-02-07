<section class="content-header">
	<h1>
		Referensi Umum
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Referensi Umum</h3>
				</div>
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<label class="col-sm-2 control-label">Topik</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="topik" placeholder="Contoh : Tematik" value="<?php echo $referensi['topik'] ?>">
								<?php echo form_error('topik','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Tahun</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="tahun" placeholder="Contoh : 2017" value="<?php echo $referensi['tahun'] ?>">
								<?php echo form_error('tahun','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="judul" placeholder="Contoh : Kelas 1 Tema 8 Buku Guru - Peristiwa Alam" value="<?php echo $referensi['judul'] ?>">
								<?php echo form_error('judul','<div class="text-danger">','</div>'); ?>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label">Pengarang</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="pengarang" placeholder="Contoh : Yun Kusumawati, Panca Ariguntar, Lubna Assagaf" value="<?php echo $referensi['pengarang'] ?>">
								<?php echo form_error('pengarang','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea name="deskripsi" class="form-control" id="editor"><?php echo $referensi['deskripsi'] ?></textarea>
								<?php echo form_error('deskripsi','<div class="text-danger">','</div>'); ?>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label">Kata Kunci</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="kata_kunci" placeholder="Contoh : BSE, Buku Guru, Kelas 1, Tema 8, Peristiwa alam" value="<?php echo $referensi['kata_kunci'] ?>">
								<?php echo form_error('kata_kunci','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Cover Buku</label>
							<div class="col-sm-10">
								<img src="<?php echo base_url("pengunjung/referensi/".$referensi['cover']) ?>" alt="<?php echo $referensi['cover']; ?>" width="150">
								<br/>
								<input type="file" name="cover">
								<?php echo form_error('cover','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">File Buku</label>
							<div class="col-sm-10">
								<a href="<?php echo base_url("pengunjung/referensi/".$referensi['file']) ?>">Download</a>
								<br/>
								<input type="file" name="file">
								<span class="text-danger"><i>*Format Buku Wajib pdf</i></span>
								<?php echo form_error('file','<div class="text-danger">','</div>'); ?>
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