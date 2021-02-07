<section class="content-header">
	<h1>
		Web Edukatif
	</h1>
</section>

<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body table-responsive">
						<?php if ($this->session->flashdata('pesan_edukatif')): ?>
							<?php echo $this->session->flashdata('pesan_edukatif'); ?>
							<meta http-equiv="refresh" content="1; url = <?php echo base_url("admin/edukatif/") ?>">

						<?php endif ?>
						<table class="table table-hover datatable">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Web</th>
									<th>Topik</th>
									<th>Url</th>
									<th>Kata Kunci</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($edukatif as $key => $value): ?>
									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $value['judul']; ?></td>
										<td><?php echo $value['topik']; ?></td>
										<td><?php echo $value['url']; ?></td>
										<td><?php echo $value['kata_kunci']; ?></td>
										<td nowrap="">
											<a href="<?php echo base_url("admin/edukatif/detail/".$value['id_edukatif']); ?>" class="btn-info btn btn-sm">Detail</a>
											<a href="<?php echo base_url("admin/edukatif/edit/".$value['id_edukatif']); ?>" class="btn-warning btn btn-sm">Edit</a>
											<a href="<?php echo base_url("admin/edukatif/hapus/".$value['id_edukatif']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<a href="<?php echo base_url('admin/edukatif/tambah') ?>" class="btn btn-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</section>