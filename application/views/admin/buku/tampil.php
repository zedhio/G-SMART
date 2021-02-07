<section class="content-header">
	<h1>
		Buku Teks Pelajaran
	</h1>
</section>

<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body table-responsive">
						<?php if ($this->session->flashdata('pesan_buku')): ?>
							<?php echo $this->session->flashdata('pesan_buku'); ?>
							<meta http-equiv="refresh" content="1; url = <?php echo base_url("admin/buku/") ?>">

						<?php endif ?>
						<table class="table table-hover datatable">
							<thead>
								<tr>
									<th>No</th>
									<th>Kelas</th>
									<th>Tahun</th>
									<th>Topik</th>
									<th>Judul</th>
									<th>Pengrang</th>
									<th>Kurikulum</th>
									<th>Kata Kunci</th>
									<th>Cover</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($buku as $key => $value): ?>
									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $value['kelas']; ?></td>
										<td><?php echo $value['tahun']; ?></td>
										<td><?php echo $value['topik']; ?></td>
										<td><?php echo $value['judul']; ?></td>
										<td><?php echo $value['pengarang']; ?></td>
										<td><?php echo $value['kurikulum']; ?></td>
										<td><?php echo $value['kata_kunci']; ?></td>
										<td>
											<img src="<?php echo base_url("pengunjung/buku/".$value['cover']) ?>" alt="<?php echo $value['cover']; ?>" width="150">
										</td>
										<td nowrap="">
											<a href="<?php echo base_url("admin/buku/detail/".$value['id_buku']); ?>" class="btn-info btn btn-sm">Detail</a>
											<a href="<?php echo base_url("admin/buku/edit/".$value['id_buku']); ?>" class="btn-warning btn btn-sm">Edit</a>
											<a href="<?php echo base_url("admin/buku/hapus/".$value['id_buku']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<a href="<?php echo base_url('admin/buku/tambah') ?>" class="btn btn-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</section>