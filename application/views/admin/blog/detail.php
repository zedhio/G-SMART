<section class="content-header">
	<h1>
		Blog
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Detail Blog</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center"><?php echo $blog['judul']; ?></h1>
							<hr/>
							<table class="table">
								<tr>
									<th style="border:none;">Isi</th>
									<th style="border:none;">:</th>
									<td style="border:none; text-align: justify;"><?php echo $blog['isi']; ?></td>
								</tr>
								<tr>
									<th style="border:none;">Gambar</th>
									<th style="border:none;">:</th>
									<td style="border:none;"><img src="<?php echo base_url("pengunjung/blog/".$blog['gambar']) ?>" alt="<?php echo $blog['gambar']; ?>" width="200"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>