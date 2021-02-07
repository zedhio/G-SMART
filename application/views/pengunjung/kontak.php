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
    <section class="peta" id="map" style="min-height: 400px;"></section>


    <section class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeInDown">
                    <?php echo ambil_isi_pengaturan("kontak_hubungi") ?>
                </div>
                <div class="col-lg-8 wow fadeInUp">
                    <form method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-md-2">Nama</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control input-lg" name="nama_bukutamu" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Email</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control input-lg" name="email_bukutamu" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Telepon</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control input-lg" name="telepon_bukutamu" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Pesan</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="isi_bukutamu" rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn-get-started">
                                    <i class="fa fa-paper-plane"></i> Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                    <?php if ($this->session->flashdata('pesan')): ?>
                        <div class="alert alert-info">
                            <?php echo $this->session->flashdata('pesan'); ?>
                        </div>
                    <?php endif ?>
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
<script>
    function myMap()
    {
        var myCenter = new google.maps.LatLng(-7.8015899,110.3901962);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: myCenter, zoom: 15};
        var map = new google.maps.Map(mapCanvas, mapOptions);

        <?php if (!empty(ambil_isi_pengaturan("kontak_peta"))): ?>
            
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
        var infowindow = new google.maps.InfoWindow({
            content: "<?php echo ambil_isi_pengaturan("kontak_peta") ?>"
        });
        infowindow.open(map,marker);
        <?php endif ?>
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo ambil_isi_pengaturan("api_google_map") ?>&callback=myMap"></script>
</body>

</html>
