<section class="content-header">
	<h1>
		Blog
	</h1>
</section>

<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body table-responsive">
						<?php if ($this->session->flashdata('pesan_blog')): ?>
							<?php echo $this->session->flashdata('pesan_blog'); ?>
							<meta http-equiv="refresh" content="1; url = <?php echo base_url("admin/blog/") ?>">
						<?php endif ?>
						<table class="table table-hover datatable">
							<thead>
								<tr>
									<th>No</th>
									<th>Judul</th>
									<th>Cover Blog</th>
									<th>Isi</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($blog as $key => $value): ?>
									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $value['judul']; ?></td>
										<td>
											<img src="<?php echo base_url("pengunjung/blog/".$value['gambar']) ?>" alt="<?php echo $value['gambar']; ?>" width="150">
										</td>
										<td style="text-align: justify;"><?php echo substr($value['isi'], 0, 300); ?> [..]</td>
										<td nowrap="">
											<a href="<?php echo base_url("admin/blog/detail/".$value['id_blog']); ?>" class="btn-info btn btn-sm">Detail</a>
											<a href="<?php echo base_url("admin/blog/edit/".$value['id_blog']); ?>" class="btn-warning btn btn-sm">Edit</a>
											<a href="<?php echo base_url("admin/blog/hapus/".$value['id_blog']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<a href="<?php echo base_url('admin/blog/tambah') ?>" class="btn btn-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</section>