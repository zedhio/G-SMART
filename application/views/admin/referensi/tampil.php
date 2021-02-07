<section class="content-header">
	<h1>
		Referensi Umum
	</h1>
</section>

<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body table-responsive">
						<?php if ($this->session->flashdata('pesan_referensi')): ?>
							<?php echo $this->session->flashdata('pesan_referensi'); ?>
							<meta http-equiv="refresh" content="1; url = <?php echo base_url("admin/referensi/") ?>">

						<?php endif ?>
						<table class="table table-hover datatable">
							<thead>
								<tr>
									<th>No</th>
									<th>Tahun</th>
									<th>Topik</th>
									<th>Judul</th>
									<th>Pengrang</th>
									<th>Kata Kunci</th>
									<th>Cover</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($referensi as $key => $value): ?>
									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $value['tahun']; ?></td>
										<td><?php echo $value['topik']; ?></td>
										<td><?php echo $value['judul']; ?></td>
										<td><?php echo $value['pengarang']; ?></td>
										<td><?php echo $value['kata_kunci']; ?></td>
										<td>
											<img src="<?php echo base_url("pengunjung/referensi/".$value['cover']) ?>" alt="<?php echo $value['cover']; ?>" width="150">
										</td>
										<td nowrap="">
											<a href="<?php echo base_url("admin/referensi/detail/".$value['id_referensi']); ?>" class="btn-info btn btn-sm">Detail</a>
											<a href="<?php echo base_url("admin/referensi/edit/".$value['id_referensi']); ?>" class="btn-warning btn btn-sm">Edit</a>
											<a href="<?php echo base_url("admin/referensi/hapus/".$value['id_referensi']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<a href="<?php echo base_url('admin/referensi/tambah') ?>" class="btn btn-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</section>