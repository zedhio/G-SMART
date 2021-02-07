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
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <?php echo ambil_isi_pengaturan("home_service") ?>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
           <div class="col-md-3">
               <div class="box wow fadeInRight">

               </div>
           </div> 
           <div class="col-md-9">
               <div class="box wow fadeInLeft">
                   <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Profil</a></li>
                    <?php if ($user['jenis']=="Guru"): ?>
                        <li><a data-toggle="tab" href="#menu1">Buku Teks Pelajaran</a></li>
                        <li><a data-toggle="tab" href="#menu2">RPP</a></li>
                        <li><a data-toggle="tab" href="#menu3">LKPD</a></li>
                        <li><a data-toggle="tab" href="#menu4">Referensi Umum</a></li>
                        <li><a data-toggle="tab" href="#menu5">Multimedia</a></li>
                        <li><a data-toggle="tab" href="#menu6">Bank Soal</a></li>
                    <?php endif ?>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>Profil</h3>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" readonly="true" value="<?php echo $user['email']; ?>">
                            <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                            <span class="text-danger"><i>*Apabila password tidak diubah mohon dikosongkan!</i></span>
                        </div>

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $user['nama']; ?>">
                            <?php echo form_error('nama','<div class="text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="">- Pilih Jenis Kelmain -</option>
                                <option value="Laki-Laki" <?php if($user['jk']=="Laki-Laki"){echo "selected";} ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if($user['jk']=="Perempuan"){echo "selected";} ?>>Perempuan</option>
                            </select>
                            <?php echo form_error('jk','<div class="text-danger">','</div>'); ?>
                        </div>

                        <?php if ($user['jenis']=="Guru" || $user['jenis']=="Siswa"): ?>
                            <div class="form-group">
                                <label>Asal Sekolah</label>
                                <input type="text" class="form-control" name="asal_sekolah" value="<?php echo $user['asal_sekolah']; ?>">
                                <?php echo form_error('asal_sekolah','<div class="text-danger">','</div>'); ?>
                            </div>

                            <div class="form-group">
                                <label>Alamat Sekolah</label>
                                <textarea name="alamat_sekolah" class="form-control"><?php echo $user['alamat_sekolah']; ?></textarea>
                                <?php echo form_error('alamat_sekolah','<div class="text-danger">','</div>'); ?>
                            </div>
                        <?php endif ?>

                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <?php if ($user['jenis']=="Guru"): ?>
                  <div id="menu1" class="tab-pane fade">
                      <h3>Buku Tesk Pelajaran</h3>
                      <div class="table-responsive">
                        <?php if (empty($buku)): ?>
                            <div class="alert alert-info">Belum ada buku teks pelajaran yang diunggah</div>
                            <?php else: ?>
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Tahun</th>
                                            <th>Topik</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Kurikulum</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($buku as $key => $value): ?>
                                            <tr>
                                                <td><?php echo $key+1; ?></td>
                                                <td><?php echo $value['kelas']; ?></td>
                                                <td><?php echo $value['tahun']; ?></td>
                                                <td><?php echo $value['topik']; ?></td>
                                                <td><?php echo $value['judul']; ?></td>
                                                <td><?php echo $value['pengarang']; ?></td>
                                                <td><?php echo $value['kurikulum']; ?></td>
                                                <td nowrap="">
                                                    <a href="<?php echo base_url("buku/detail/".$value['id_buku']); ?>" class="btn-info btn btn-sm">Detail</a>
                                                    <a href="<?php echo base_url("buku/edit/".$value['id_buku']); ?>" class="btn-warning btn btn-sm">Edit</a>
                                                    <a href="<?php echo base_url("buku/hapus/".$value['id_buku']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            <?php endif ?>
                        </div>
                        <a href="<?php echo base_url("buku/tambah"); ?>" class="btn btn-primary">Tambah</a>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                      <h3>RPP</h3>
                      <div class="table-responsive">
                          <?php if (empty($rpp)): ?>
                              <div class="alert alert-info">Belum ada RPP yang diunggah</div>
                              <?php else: ?>

                                  <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Muatan</th>
                                            <th>Jenis</th>
                                            <th>Judul</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($rpp as $key => $value): ?>
                                            <tr>
                                                <td><?php echo $key+1; ?></td>
                                                <td><?php echo $value['kelas']; ?></td>
                                                <td><?php echo $value['muatan']; ?></td>
                                                <td><?php echo $value['jenis']; ?></td>
                                                <td><?php echo $value['judul']; ?></td>
                                                <td nowrap="">
                                                    <a href="<?php echo base_url("rpp/detail/".$value['id_rpp']); ?>" class="btn-info btn btn-sm">Detail</a>
                                                    <a href="<?php echo base_url("rpp/edit/".$value['id_rpp']); ?>" class="btn-warning btn btn-sm">Edit</a>
                                                    <a href="<?php echo base_url("rpp/hapus/".$value['id_rpp']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            <?php endif ?>
                        </div>
                        <a href="<?php echo base_url("rpp/tambah"); ?>" class="btn btn-primary">Tambah</a>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                      <h3>LKPD</h3>
                      <div class="tabl-responsive">
                          <?php if (empty($lkpd)): ?>
                            <div class="alert alert-info">Belum ada LKPD yang diunggah</div>
                            <?php else: ?>
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Muatan</th>
                                            <th>Judul</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($lkpd as $key => $value): ?>
                                            <tr>
                                                <td><?php echo $key+1; ?></td>
                                                <td><?php echo $value['kelas']; ?></td>
                                                <td><?php echo $value['muatan']; ?></td>
                                                <td><?php echo $value['judul']; ?></td>
                                                <td nowrap="">
                                                    <a href="<?php echo base_url("lkpd/detail/".$value['id_lkpd']); ?>" class="btn-info btn btn-sm">Detail</a>
                                                    <a href="<?php echo base_url("lkpd/edit/".$value['id_lkpd']); ?>" class="btn-warning btn btn-sm">Edit</a>
                                                    <a href="<?php echo base_url("lkpd/hapus/".$value['id_lkpd']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            <?php endif ?>
                        </div>
                        <a href="<?php echo base_url("lkpd/tambah"); ?>" class="btn btn-primary">Tambah</a>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                      <h3>Referensi Umum</h3>
                      <div class="tabl-responsive">
                          <div class="table-responsive">
                              <?php if (empty($referensi)): ?>
                                <div class="alert alert-info">Belum ada referensi umum yang diunggah</div>
                                <?php else: ?>
                                    <table class="table table-hover datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Topik</th>
                                                <th>Judul</th>
                                                <th>Pengrang</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($referensi as $key => $value): ?>
                                                <tr>
                                                    <td><?php echo $key+1; ?></td>
                                                    <td><?php echo $value['tahun']; ?></td>
                                                    <td><?php echo $value['topik']; ?></td>
                                                    <td><?php echo $value['judul']; ?></td>
                                                    <td><?php echo $value['pengarang']; ?></td>
                                                    <td nowrap="">
                                                        <a href="<?php echo base_url("referensi/detail/".$value['id_referensi']); ?>" class="btn-info btn btn-sm">Detail</a>
                                                        <a href="<?php echo base_url("referensi/edit/".$value['id_referensi']); ?>" class="btn-warning btn btn-sm">Edit</a>
                                                        <a href="<?php echo base_url("referensi/hapus/".$value['id_referensi']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                <?php endif ?>
                            </div>
                        </div>
                        <a href="<?php echo base_url("referensi/tambah"); ?>" class="btn btn-primary">Tambah</a>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                      <h3>Multimedia</h3>
                      <div class="tabl-responsive"></div>
                  </div>
                  <div id="menu6" class="tab-pane fade">
                      <h3>Bank Soal</h3>
                      <div class="tabl-responsive">
                          <?php if (empty($soal)): ?>
                              <div class="alert alert-info">Belum ada bank soal yang diunggah</div>
                              <?php else: ?>
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Muatan</th>
                                            <th>Judul</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($soal as $key => $value): ?>
                                            <tr>
                                                <td><?php echo $key+1; ?></td>
                                                <td><?php echo $value['kelas']; ?></td>
                                                <td><?php echo $value['muatan']; ?></td>
                                                <td><?php echo $value['judul']; ?></td>
                                                <td nowrap="">
                                                    <a href="<?php echo base_url("soal/detail/".$value['id_soal']); ?>" class="btn-info btn btn-sm">Detail</a>
                                                    <a href="<?php echo base_url("soal/edit/".$value['id_soal']); ?>" class="btn-warning btn btn-sm">Edit</a>
                                                    <a href="<?php echo base_url("soal/hapus/".$value['id_soal']); ?>" class="btn-danger btn btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            <?php endif ?>
                        </div>
                        <a href="<?php echo base_url("soal/tambah"); ?>" class="btn btn-primary">Tambah</a>
                    </div>
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
