<section class="content-header">
	<h1>
		Multimedia
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Detail Multimedia</h3>
				</div>
				<div class="box-body">
					
					<h1 class="text-center"><?php echo $multimedia['judul']; ?></h1>
					<hr/>
					<table class="table">
						<tr>
							<th style="border:none;">Topik</th>
							<th style="border:none;">:</th>
							<td style="border:none;"><?php echo $multimedia['topik']; ?></td>
						</tr>
						<tr>
							<th style="border:none;">Kelas</th>
							<th style="border:none;">:</th>
							<td style="border:none;"><?php echo $multimedia['kelas']; ?></td>
						</tr>
						<tr>
							<th style="border:none;">Url</th>
							<th style="border:none;">:</th>
							<td style="border:none;"><a href="<?php echo $multimedia['url']; ?>"><?php echo $multimedia['url']; ?></a></td>
						</tr>
						<tr>
							<th style="border:none;">Deskripsi</th>
							<th style="border:none;">:</th>
							<td style="border:none;"><?php echo $multimedia['deskripsi']; ?></td>
						</tr>
						<tr>
							<th style="border:none;">Kata Kunci</th>
							<th style="border:none;">:</th>
							<td style="border:none;"><?php echo $multimedia['kata_kunci']; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>