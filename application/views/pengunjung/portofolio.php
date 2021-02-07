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
                    <?php echo ambil_isi_pengaturan("portfolio_header") ?>
                </div>
            </div>
        </div>
    </section>




    <section class="halproduk">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php foreach ($portfolio as $key => $value): ?>
                    <?php if (($key+1)%2==0): ?>
                    <div class="row itemportfolio wow fadeInRight">
                        <div class="col-md-5">
                            <div class="image">
                                <img src="<?php echo base_url("assets/portofolio/".$value["gambar"]) ?>" alt="<?php echo $value["judul_portofolio"] ?>" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h3>
                                <a href="<?php echo base_url("portfolio/detail/".$value["url_portofolio"]) ?>">
                                    <?php echo $value["judul_portofolio"] ?>
                                </a>

                            </h3>
                            <p><?php echo substr(strip_tags($value["deskripsi_portofolio"]), 0,200) ?></p>
                                <a href="<?php echo base_url("portfolio/detail/".$value["url_portofolio"]) ?>" class="btn-projects">Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="row itemportfolio wow fadeInLeft">
                        <div class="col-md-7">
                            <h3>
                                <a href="<?php echo base_url("portfolio/detail/".$value["url_portofolio"]) ?>">
                                    <?php echo $value["judul_portofolio"] ?>
                                </a>

                            </h3>
                            <p><?php echo substr(strip_tags($value["deskripsi_portofolio"]), 0,150) ?></p>
                                <a href="<?php echo base_url("portfolio/detail/".$value["url_portofolio"]) ?>" class="btn-projects">Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                        <div class="col-md-5">
                            <div class="image">
                                <img src="<?php echo base_url("assets/portofolio/".$value['gambar']) ?>" alt="<?php echo $value["judul_portofolio"] ?>" class="img-responsive">
                            </div>
                        </div>
                        
                    </div>
                    <?php endif ?>
                    <?php endforeach ?>
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
