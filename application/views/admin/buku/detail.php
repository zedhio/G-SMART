<?php
$path = base_url("pengunjung/buku/".$buku['file']);
?>
<section class="content-header">
	<h1>
		Buku Teks Pelajaran
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Detail Buku Teks Pelajaran</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<embed src="<?php echo $path; ?>#toolbar=0&navpanes=0&scrollbar=0" width="100%" height="500">
						</div>
						<div class="col-md-6">
							<h1 class="text-center"><?php echo $buku['judul']; ?></h1>
							<hr/>
							<table class="table">
								<tr>
									<th style="border:none;">Kelas</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $buku['kelas']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Topik</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $buku['topik']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Tahun</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $buku['tahun']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Pengarang</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $buku['pengarang']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Kurikulum</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $buku['kurikulum']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Deskripsi</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $buku['deskripsi']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Kata Kunci</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $buku['kata_kunci']; ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>