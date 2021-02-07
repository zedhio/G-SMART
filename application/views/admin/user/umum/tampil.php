<section class="content-header">
	<h1>
		Umum
	</h1>
</section>

<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body table-responsive">
						<?php if ($this->session->flashdata('pesan_umum')): ?>
							<?php echo $this->session->flashdata('pesan_umum'); ?>
							<meta http-equiv="refresh" content="1; url = <?php echo base_url("admin/umum/") ?>">
						<?php endif ?>
						<table class="table table-hover datatable">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Jenis Kelamin</th>
									<th>Status</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($umum as $key => $value): ?>
									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $value['nama']; ?></td>
										<td><?php echo $value['email']; ?></td>
										<td><?php echo $value['jk']; ?></td>
										<td><?php echo $value['status']; ?></td>
										<td nowrap="">
											<a href="<?php echo base_url("admin/umum/hapus/".$value['id_user']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>