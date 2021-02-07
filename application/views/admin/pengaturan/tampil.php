<section class="content-header">
	<h1>
		Pengaturan
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body table-responsive">	
					<?php if ($this->session->flashdata('pesan_pengaturan')): ?>
						<?php echo $this->session->flashdata('pesan_pengaturan'); ?>
						<meta http-equiv="refresh" content="1; url = <?php echo base_url("admin/pengaturan/") ?>">
					<?php endif ?>
					<form method="post">
						<table class="table table-hover datatable">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Kolom</th>
									<th>Isi</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($tamu as $key => $value): ?>
									<tr>
										<td><?php echo $key+1 ?></td>
										<td><?php echo $value['kolom_pengaturan'] ?></td>
										<td><?php echo $value['isi_pengaturan'] ?></td>
										<td>
											<a href="<?php echo base_url("admin/pengaturan/edit/$value[id_pengaturan]") ?>" class="btn btn-warning btn-xs">Edit</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>								
					</form>
				</div>
			</div>
		</div>
	</div>
</section>