<section class="content-header">
	<h1>
		RPP
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Edit RPP</h3>
				</div>
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-2 control-label">Kelas</label>
							<div class="col-sm-10">
								<select name="kelas" class="form-control">
									<option value="">- Pilih Kelas -</option>
									<?php foreach ($kelas as $key => $value): ?>
										<option value="<?php echo $value ?>" <?php if($rpp['kelas']==$value){echo "selected";} ?>><?php echo $value; ?></option>
									<?php endforeach ?>
								</select>
								<?php echo form_error('kelas','<div class="text-danger">','</div>'); ?>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label">Muatan</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="muatan" placeholder="Contoh : Tematik" value="<?php echo $rpp['muatan']; ?>">
								<?php echo form_error('muatan','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Jenis</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="jenis" placeholder="Contoh : RPP" value="<?php echo $rpp['jenis']; ?>">
								<?php echo form_error('jenis','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="judul" placeholder="Contoh : RPP KELAS 1 TEMA 4 SUBTEMA 1 PB 1" value="<?php echo $rpp['judul']; ?>">
								<?php echo form_error('judul','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea name="deskripsi" class="form-control" id="editor"><?php echo $rpp['deskripsi']; ?></textarea>
								<?php echo form_error('deskripsi','<div class="text-danger">','</div>'); ?>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label">Kata Kunci</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="kata_kunci" placeholder="Contoh : BSE, Buku Guru, Kelas 1, Tema 8, Peristiwa alam" value="<?php echo $rpp['kata_kunci']; ?>">
								<?php echo form_error('kata_kunci','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Cover</label>
							<div class="col-sm-10">
								<img src="<?php echo base_url("pengunjung/rpp/".$rpp['cover']) ?>" alt="<?php echo $rpp['cover']; ?>" width="150">
								<br/>
								<input type="file" name="cover">
								<?php echo form_error('cover','<div class="text-danger">','</div>'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">File</label>
							<div class="col-sm-10">
								<a href="<?php echo base_url("pengunjung/rpp/".$rpp['file']) ?>">Download</a>
								<br/>
								<input type="file" name="file">
								<span class="text-danger"><i>*Format RPP Wajib pdf,doc,docx,xlx,xlxs</i></span>
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