<section class="content-header">
	<h1>
		Bank Web Edukatif
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Detail Web Edukatif</h3>
				</div>
				<div class="box-body">
					
					<h1 class="text-center"><?php echo $edukatif['judul']; ?></h1>
					<hr/>
					<table class="table">
						<tr>
							<th style="border:none;">Topik</th>
							<th style="border:none;">:</th>
							<td style="border:none;"><?php echo $edukatif['topik']; ?></td>
						</tr>
						<tr>
							<th style="border:none;">Url</th>
							<th style="border:none;">:</th>
							<td style="border:none;"><a href="<?php echo $edukatif['url']; ?>"><?php echo $edukatif['url']; ?></a></td>
						</tr>
						<tr>
							<th style="border:none;">Deskripsi</th>
							<th style="border:none;">:</th>
							<td style="border:none;"><?php echo $edukatif['deskripsi']; ?></td>
						</tr>
						<tr>
							<th style="border:none;">Kata Kunci</th>
							<th style="border:none;">:</th>
							<td style="border:none;"><?php echo $edukatif['kata_kunci']; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>