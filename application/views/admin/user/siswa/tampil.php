<section class="content-header">
	<h1>
		Siswa
	</h1>
</section>

<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body table-responsive">
						<?php if ($this->session->flashdata('pesan_siswa')): ?>
							<?php echo $this->session->flashdata('pesan_siswa'); ?>
							<meta http-equiv="refresh" content="1; url = <?php echo base_url("admin/siswa/") ?>">
						<?php endif ?>
						<table class="table table-hover datatable">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Jenis Kelamin</th>
									<th>Alamat Sekolah</th>
									<th>Asal Sekolah</th>
									<th>Status</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($siswa as $key => $value): ?>
									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $value['nama']; ?></td>
										<td><?php echo $value['email']; ?></td>
										<td><?php echo $value['jk']; ?></td>
										<td><?php echo $value['asal_sekolah']; ?></td>
										<td><?php echo $value['alamat_sekolah']; ?></td>
										<td><?php echo $value['status']; ?></td>
										<td nowrap="">
											<a href="<?php echo base_url("admin/siswa/hapus/".$value['id_user']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
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