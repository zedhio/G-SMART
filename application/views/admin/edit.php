<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Admin</h3>
				</div>
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
								<input type="text" name="username" class="form-control" value="<?php echo $admin['username'] ?>" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" name="password" class="form-control">
								<p class="text-danger"><i>* Apabila password tidak diubah, mohon dikosongkan.</i></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
								<input type="tex" class="form-control" name="nama" value="<?php echo $admin['nama'] ?>">
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right"><span class="fa fa-cloud-upload"></span> Simpan </button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>