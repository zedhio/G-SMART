<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo ambil_isi_pengaturan("deskripsi_web") ?>">
    <meta name="author" content="">
    <title><?php echo ambil_isi_pengaturan("nama_web") ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700">
    <!-- Plugin CSS -->
    <!-- <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url("pengunjung/animate/animate.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("pengunjung/css/creative.css") ?>" rel="stylesheet">
</head>

<body id="page-top">

    <?php include 'menu.php'; ?>

    <section class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                 <?php echo ambil_isi_pengaturan("header") ?>
             </div>
         </div>
     </div>
 </section>
 <section class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box wow fadeInLeft">
                    <h3 class="text-center">Buku Teks Pelajaran</h3>
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kelas</label>
                            <div class="col-sm-10">
                                <select name="kelas" class="form-control">
                                    <option value="">- Pilih Kelas -</option>
                                    <?php foreach ($kelas as $key => $value): ?>
                                        <option value="<?php echo $value ?>" <?php if($buku['kelas']==$value){echo "selected";} ?>><?php echo $value; ?></option>
                                    <?php endforeach ?>
                                </select>
                                <?php echo form_error('kelas','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tahun</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="tahun" placeholder="Contoh : 2017" value="<?php echo $buku['tahun'] ?>">
                                <?php echo form_error('tahun','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Topik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="topik" placeholder="Contoh : Tematik" value="<?php echo $buku['topik'] ?>">
                                <?php echo form_error('topik','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="judul" placeholder="Contoh : Kelas 1 Tema 8 Buku Guru - Peristiwa Alam" value="<?php echo $buku['judul'] ?>">
                                <?php echo form_error('judul','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Pengarang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pengarang" placeholder="Contoh : Yun Kusumawati, Panca Ariguntar, Lubna Assagaf" value="<?php echo $buku['pengarang'] ?>">
                                <?php echo form_error('pengarang','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kurikulum</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kurikulum" placeholder="Contoh : K-13" value="<?php echo $buku['kurikulum'] ?>">
                                <?php echo form_error('kurikulum','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi" class="form-control" id="editor"><?php echo $buku['deskripsi'] ?></textarea>
                                <?php echo form_error('deskripsi','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kata Kunci</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kata_kunci" placeholder="Contoh : BSE, Buku Guru, Kelas 1, Tema 8, Peristiwa alam" value="<?php echo $buku['kata_kunci'] ?>">
                                <?php echo form_error('kata_kunci','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cover Buku</label>
                            <div class="col-sm-10">
                                <img src="<?php echo base_url("pengunjung/buku/".$buku['cover']) ?>" alt="<?php echo $buku['cover']; ?>">
                                <br/>
                                <input type="file" name="cover">
                                <?php echo form_error('cover','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">File Buku</label>
                            <div class="col-sm-10">
                                <a href="<?php echo base_url("pengunjung/buku/".$buku['file']) ?>">Download</a>
                                <br/>
                                <input type="file" name="file">
                                <span class="text-danger"><i>*Format Buku Wajib pdf</i></span>
                                <?php echo form_error('file','<div class="text-danger">','</div>'); ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info pull-right"><span class="fa fa-cloud-upload"></span> Simpan </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <?php echo ambil_isi_pengaturan("footer_1") ?>
                <?php echo ambil_isi_pengaturan("footer_2") ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <?php echo ambil_isi_pengaturan("footer_copyright") ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal modal-search fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <form action="<?php echo base_url("news/search") ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="modal-input" placeholder="Cari berita Timeexcelindo" name="keyword">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.1.4/scrollreveal.min.js"></script>
<!-- <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo base_url("pengunjung/wow/wow.min.js") ?>"></script>
<script src="<?php echo base_url("pengunjung/js/creative.js") ?>"></script>
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
