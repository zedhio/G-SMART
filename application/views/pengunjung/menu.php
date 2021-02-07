<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#naff">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">G-SMART</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="naff">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo base_url() ?>">Home</a>
                </li>
                <li><a href="<?php echo base_url("career") ?>">About</a></li>
                <li><a href="<?php echo base_url("contact") ?>">Contact</a></li>
                <?php if (empty($_SESSION['user']) || !isset($_SESSION['user'])): ?>
                <li><a href="<?php echo base_url("daftar") ?>">Daftar</a></li>
                <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                <?php else: ?>
                    <li><a href="<?php echo base_url("profil"); ?>">Profile</a></li>
                    <li><a href="<?php echo base_url("welcome/logout"); ?>">Logout</a></li>
                <?php endif ?>
                <li>
                    <a class="search-icon" href="">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url("login"); ?>" method="post">
              <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="username">
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password">
              </div>
              <button class="btn btn-primary">Login</button>
          </form>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
  </div>
</div>
</div>