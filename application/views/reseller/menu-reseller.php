        <section class="sidebar">
          <!-- Sidebar user panel -->
          <?php
          $log = $this->model_app->edit('pemilik',array('id_pemilik'=>$this->session->id_pemilik))->row_array();
          if ($log['foto']==''){ $foto = 'blank.png'; }else{ $foto = $log['foto']; }
            echo "<div class='user-panel'>
              <div class='pull-left image'>
                <img src='".base_url()."asset/foto_user/$foto' class='img-circle' alt='User Image'>
              </div>
              <div class='pull-left info'>
                <p>$log[nama_pemilik]</p>
                <a href=''><i class='fa fa-circle text-success'></i> Online</a>
              </div>
            </div>";
          ?>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU PEMILIK</li>
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-th-large"></i> <span>Kelola Data</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <?php
                        echo "<li><a href='".base_url().$this->uri->segment(1)."/rekening'><i class='fa fa-circle-o'></i> No Rekening Anda</a></li>";
                        echo "<li><a href='".base_url().$this->uri->segment(1)."/keterangan'><i class='fa fa-circle-o'></i> Info Kos</a></li>";
                        echo "<li><a href='".base_url().$this->uri->segment(1)."/produk'><i class='fa fa-circle-o'></i> Data Kost</a></li>";
                    ?>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-shopping-cart"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <?php
                        echo "<li><a href='".base_url().$this->uri->segment(1)."/penjualan'><i class='fa fa-circle-o'></i> Transaksi Penyewa</a></li>";
                        echo "<li><a href='".base_url().$this->uri->segment(1)."/pembayaran_konsumen'><i class='fa fa-circle-o'></i> Data Pembayaran Penyewa</a></li>";
                    ?>
                </ul>
            </li>

            <!-- <li class="treeview">
                <a href="#"><i class="fa fa-book"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i></a> -->
                <ul class="treeview-menu">
                    <?php
                        echo "<li><a href='".base_url().$this->uri->segment(1)."/keuangan'><i class='fa fa-circle-o'></i> Data Keuangan</a></li>";
                    ?>
                </ul>
            </li>

            <li><a href="<?php echo base_url(); ?>reseller/edit_reseller/<?php echo $this->session->id_pemilik; ?>"><i class="fa fa-user"></i> <span>Edit Profile</span></a></li>
            <li><a href="<?php echo base_url(); ?>reseller/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>
