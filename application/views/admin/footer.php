</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
	<!-- To the right -->
	<div class="pull-right hidden-xs">
		Anything you want
	</div>
	<!-- Default to the left -->
	<strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
<script src="<?php echo base_url("assets/dist/js/app.min.js") ?>"></script>

<!-- CKEDITOR -->
<!-- <script src="<?php //echo base_url("assets/plugins/ckeditor/ckeditor.js") ?>
"></script>   -->

<script src="https://cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>

<script>
	CKEDITOR.replace("editor");
	CKEDITOR.replace(".ckeditor");
</script>

<!-- datatables -->
<script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap.min.js") ?>"></script>
<script>
	$(function () 
	{
		$('.datatable').DataTable();
	});
</script>
</body>
</html>
