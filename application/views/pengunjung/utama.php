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

    <section class="hero" style="background-image:url('<?php echo ambil_isi_pengaturan("gambar_hero") ?>'); ">
        <div class="container">
            <div class="row">
                <?php echo ambil_isi_pengaturan("isi_hero") ?>
            </div>
        </div>
    </section>
    

    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <?php echo ambil_isi_pengaturan("home_about") ?>
            </div>
        </div>
    </section>
    <section class="services" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <?php echo ambil_isi_pengaturan("home_service") ?>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                
                <?php $terakhir = end($service); ?>
                <?php foreach ($service as $key => $value): ?>
                <?php $kelas = (($key+1) % 2 == 0)?"fadeInLeft":"fadeInRight"; ?>
                <?php $akhir = ($value["nama_jenisservice"]==$terakhir['nama_jenisservice'])?"col-md-offset-3":""; ?>
                <div class="col-lg-6 <?php echo $akhir ?>">
                    <div class="box wow <?php echo $kelas ?>">
                        <div class="icon">
                            
                            <img src="<?php echo base_url("assets/jenisservice/".$value["gambar_jenisservice"]) ?>" alt="" width="70">
                        </div>
                        <h4 class="title">
                            <a href="<?php echo base_url("service/".$value['url_jenisservice']) ?>">
                                <?php echo $value['nama_jenisservice'] ?>
                            </a>
                        </h4>
                        <p class="description"><?php echo $value["deskripsi_jenisservice"] ?></p>
                    </div>
                </div>
                <?php endforeach ?>

            </div>
        </div>
</section>


<section class="produk">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
               <?php echo ambil_isi_pengaturan("home_produk") ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel owl-theme home-produk sr-produk">
            <?php foreach ($produk as $key => $value): ?>
                <div>
                    <div class="home-produk-image">
                        <img src="<?php echo base_url("assets/produk/".$value["crop_produk"]) ?>" alt="<?php echo $value["nama_produk"] ?>">
                    </div>
                    <h3>
                        <a href="<?php echo base_url("product/detail/".$value['url_produk']) ?>">
                            <?php echo $value["nama_produk"] ?>
                        </a>
                    </h3>
                </div>
            <?php endforeach ?>
            
        </div>
    </div>
</section>


<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <?php echo ambil_isi_pengaturan("home_news") ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($news as $key => $value): ?>
                <?php
                $no = $key+1;
                $kelas = ($no % 2 ==0)?"fadeInDown":"fadeInUp";
                ?>
                <div class="col-md-6 wow <?php echo $kelas ?>">
                    <div class="post">
                        <div class="post-image">
                            <img src="<?php echo base_url("assets/news/".$value["gambar_news"]) ?>" alt="<?php echo $value["judul_news"] ?>">
                        </div>
                        <div class="post-info">
                            <h2>
                                <a href="<?php echo base_url("news/detail/".$value["url_news"]) ?>">
                                    <?php echo $value["judul_news"] ?>
                                </a>
                            </h2>
                            <span><?php echo tanggal_indo($value["tanggal_news"]) ?></span>
                            <p><?php echo substr(strip_tags($value["isi_news"]), 0,100) ?>..</p>
                            <a href="<?php echo base_url("news/detail/".$value["url_news"]) ?>">Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            
        </div>
    </div>
    <div class="container text-center">
        <a href="<?php echo base_url("news") ?>" class="btn-get-started sr-button">Explore</a>
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
