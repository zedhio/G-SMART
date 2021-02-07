<?php
$path = base_url("pengunjung/buku/".$buku['file']);
if ($buku['id_guru']==0) {
    $guru = "Admin";
}else{
    $guru = $buku['nama'];
}
?>
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
 <section class="services" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php echo ambil_isi_pengaturan("home_buku") ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="box wow">
                    <embed src="<?php echo $path; ?>#toolbar=0&navpanes=0&scrollbar=0" width="100%" height="455">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow">
                        <h4 class="title" style="margin-left: 0;">
                            <?php echo $buku['judul']; ?>
                        </h4>
                        <table class="table">
                            <tr>
                                <th style="border:none;">Posting By</th>
                                <th style="border:none;">:</th>
                                <td style="border:none;"><?php echo $guru; ?></td>
                            </tr>
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
                                <th style="border:none;">Kata Kunci</th>
                                <th style="border:none;">:</th>
                                <td style="border:none;"><?php echo $buku['kata_kunci']; ?></td>
                            </tr>
                        </table>
                        <div style="border:1px solid #000;margin: 10px 0;"></div>
                        <p class="description" style="margin-left: 0;"><?php echo strip_tags($buku['deskripsi']); ?></p>
                        <br/>

                        <div class="text-center">
                            <?php if (empty($_SESSION['user'])): ?>
                                <button class="btn btn-info btn-lg" disabled="disabled" title="Anda harus login terlebih dahulu">Download</button>
                                <?php else: ?>
                                    <a href="<?php echo $path; ?>" class="btn btn-info btn-lg">Download</a>
                                <?php endif ?>
                            </div>
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

    </body>

    </html>
