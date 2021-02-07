<?php
$ext = pathinfo($rpp['file'],PATHINFO_EXTENSION);
$path = base_url("pengunjung/rpp/".$rpp['file']);
?>
<section class="content-header">
	<h1>
		RPP
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Detail RPP</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<?php if ($ext=="pdf"): ?>
							<embed src="<?php echo $path; ?>#toolbar=0&navpanes=0&scrollbar=0" width="100%" height="500">
								<?php else: ?>
									<img src="<?php echo base_url("pengunjung/rpp/".$rpp['cover']) ?>" alt="<?php echo $rpp['cover']; ?>" class="img-responsive">
							<?php endif ?>
						</div>
						<div class="col-md-6">
							<h1 class="text-center"><?php echo $rpp['judul']; ?></h1>
							<hr/>
							<table class="table">
								<tr>
									<th style="border:none;">Muatan</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $rpp['muatan']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Jenis</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $rpp['jenis']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Deskripsi</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $rpp['deskripsi']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Kata Kunci</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><?php echo $rpp['kata_kunci']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">File</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><a href="<?php echo base_url("pengunjung/rpp/".$rpp['file']) ?>">Download</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>