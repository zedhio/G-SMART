<?php
$path = base_url("pengunjung/referensi/".$referensi['file']);
?>
<section class="content-header">
	<h1>
		Referensi Umum
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Detail Referensi Umum</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<embed src="<?php echo $path; ?>#toolbar=0&navpanes=0&scrollbar=0" width="100%" height="500">
						</div>
						<div class="col-md-6">
							<h1 class="text-center"><?php echo $referensi['judul']; ?></h1>
							<hr/>
							<table class="table">
								<tr>
									<th style="border:none;">Topik</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $referensi['topik']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Tahun</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $referensi['tahun']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Pengarang</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $referensi['pengarang']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Deskripsi</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $referensi['deskripsi']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Kata Kunci</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $referensi['kata_kunci']; ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>