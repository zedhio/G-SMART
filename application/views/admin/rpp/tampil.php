<section class="content-header">
	<h1>
		RPP
	</h1>
</section>

<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body table-responsive">
						<?php if ($this->session->flashdata('pesan_rpp')): ?>
							<?php echo $this->session->flashdata('pesan_rpp'); ?>
							<meta http-equiv="refresh" content="1; url = <?php echo base_url("admin/rpp/") ?>">

						<?php endif ?>
						<table class="table table-hover datatable">
							<thead>
								<tr>
									<th>No</th>
									<th>Kelas</th>
									<th>Muatan</th>
									<th>Jenis</th>
									<th>Judul</th>
									<th>Kata Kunci</th>
									<th>Cover</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($rpp as $key => $value): ?>
									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $value['kelas']; ?></td>
										<td><?php echo $value['muatan']; ?></td>
										<td><?php echo $value['jenis']; ?></td>
										<td><?php echo $value['judul']; ?></td>
										<td><?php echo $value['kata_kunci']; ?></td>
										<td>
											<img src="<?php echo base_url("pengunjung/rpp/".$value['cover']) ?>" alt="<?php echo $value['cover']; ?>" width="150">
										</td>
										<td nowrap="">
											<a href="<?php echo base_url("admin/rpp/detail/".$value['id_rpp']); ?>" class="btn-info btn btn-sm">Detail</a>
											<a href="<?php echo base_url("admin/rpp/edit/".$value['id_rpp']); ?>" class="btn-warning btn btn-sm">Edit</a>
											<a href="<?php echo base_url("admin/rpp/hapus/".$value['id_rpp']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<a href="<?php echo base_url('admin/rpp/tambah') ?>" class="btn btn-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</section>