<section class="content-header">
	<h1>
		Multimedia
	</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body table-responsive">
					<?php if ($this->session->flashdata('pesan_multimedia')): ?>
						<?php echo $this->session->flashdata('pesan_multimedia'); ?>
						<meta http-equiv="refresh" content="1; url = <?php echo base_url("admin/multimedia/") ?>">
					<?php endif ?>
					<table class="table table-hover datatable">
						<thead>
							<tr>
								<th>No</th>
								<th>Topik</th>
								<th>Kelas</th>
								<th>Nama Multimedia</th>
								<th>Kata Kunci</th>
								<th>Url</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($multimedia as $key => $value): ?>
								<tr>
									<td><?php echo $key+1; ?></td>
									<td><?php echo $value['topik']; ?></td>
									<td><?php echo $value['kelas']; ?></td>
									<td><?php echo $value['judul']; ?></td>
									<td><?php echo $value['kata_kunci']; ?></td>
									<td><?php echo $value['url']; ?></td>
									<td nowrap="">
										<a href="<?php echo base_url("admin/multimedia/detail/".$value['id_multimedia']); ?>" class="btn-info btn btn-sm">Detail</a>
										<a href="<?php echo base_url("admin/multimedia/edit/".$value['id_multimedia']); ?>" class="btn-warning btn btn-sm">Edit</a>
										<a href="<?php echo base_url("admin/multimedia/hapus/".$value['id_multimedia']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<a href="<?php echo base_url('admin/multimedia/tambah') ?>" class="btn btn-primary">Tambah</a>
				</div>
			</div>
		</div>
	</div>
</section>