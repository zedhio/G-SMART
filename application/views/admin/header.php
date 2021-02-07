<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css") ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/dist/css/AdminLTE.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/dist/css/skins/skin-purple-light.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap.css") ?>">
  <link rel="icon" type="text/css" href="<?php echo base_url("assets/icon/favicon.png") ?>">
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">
      <a href="<?php echo base_url("admin/home") ?>" class="logo">
        <span class="logo-mini"><b>GS</b></span>
        <span class="logo-lg"><b>Admin</b>GS</span>
      </a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="<?php echo base_url("Home") ?>" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo base_url("assets/dist/img/user2-160x160.jpg") ?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $_SESSION['admin']['nama'] ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url("assets/dist/img/user2-160x160.jpg") ?>" class="img-circle" alt="User Image">

                  <p>
                   <?php echo $_SESSION['admin']['nama'] ?>
                   <small>Administrator</small>
                 </p>
               </li>

               <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url("admin/admin") ?>" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url("admin/login/logout") ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>


        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url("assets/dist/img/user2-160x160.jpg") ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['admin']['nama'] ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active">
          <a href="<?php echo base_url("admin/home") ?>"><i class="fa fa-home"></i> <span>Home</span></a>
        </li>
        <li><a href="<?php echo base_url("admin/admin") ?>"><i class="fa fa-user"></i> <span>Admin</span></a></li>
        <li><a href="<?php echo base_url("admin/profil") ?>"><i class="fa fa-pencil"></i> <span>Profil</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cube"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url("admin/umum") ?>"><span>Umum</span></a></li>
            <li><a href="<?php echo base_url("admin/siswa") ?>"> <span>Siswa</span></a></li>
            <li><a href="<?php echo base_url("admin/guru") ?>"> <span>Guru</span></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>Komponen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url("admin/buku") ?>"><span>Buku Teks Pelajaran</span></a></li>
            <li><a href="<?php echo base_url("admin/rpp") ?>"> <span>RPP</span></a></li>
            <li><a href="<?php echo base_url("admin/lkpd") ?>"> <span>LKPD</span></a></li>
            <li><a href="<?php echo base_url("admin/multimedia") ?>"> <span>Multimedia</span></a></li>
            <li><a href="<?php echo base_url("admin/referensi") ?>"> <span>Referensi Umum</span></a></li>
            <li><a href="<?php echo base_url("admin/edukatif") ?>"> <span>Web Edukatif</span></a></li>
            <li><a href="<?php echo base_url("admin/soal") ?>"> <span>Bank Soal</span></a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url("admin/blog") ?>"><i class="fa fa-bookmark-o"></i> <span>Blog</span></a></li>
        <li><a href="<?php echo base_url("admin/pengaturan/") ?>"><i class="fa fa-cog"></i> <span>Pengaturan</span></a></li>
        <li><a href="<?php echo base_url("admin/login/logout/") ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->


