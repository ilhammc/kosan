  <a style='color:#000' href='<?php echo base_url().$this->uri->segment(1); ?>/manajemenuser'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Data User</span>
        <?php $jmld = $this->model_app->view('users')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmld; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>

<section class="col-lg-7 connectedSortable">
  <?php
    $jmlpesan = $this->model_app->view_where('hubungi', array('dibaca'=>'N'))->num_rows();
    $jmlberita = $this->model_app->view_where('komentar', array('aktif'=>'N'))->num_rows();
    $jmlvideo = $this->model_app->view_where('komentarvid', array('aktif'=>'N'))->num_rows();
  ?>
</section><!-- /.Left col -->

<section class="col-lg-5 connectedSortable">
    <?php include "grafik.php"; ?>
</section><!-- right col -->
