        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            <?php $usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
                  if (trim($usr['foto'])==''){ $foto = 'blank.png'; }else{ $foto = $usr['foto']; } ?>
            <img src="<?php echo base_url(); ?>/asset/foto_user/<?php echo $foto; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <?php echo "<p>$usr[nama_lengkap]</p>"; ?>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='text-transform:uppercase;'>MENU <span class='uppercase'><?php echo $this->session->level; ?></span></li>
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-th-list"></i> <span>Data SISKOST</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Master <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                  <?php
                    $cek=$this->model_app->umenu_akses("konsumen",$this->session->id_session);
                    if($cek==1 OR $this->session->level=='admin'){
                      echo "<li><a href='".base_url().$this->uri->segment(1)."/konsumen'><i class='fa fa-circle-o'></i> Data Penyewa</a></li>";
                    }

                    $cek=$this->model_app->umenu_akses("reseller",$this->session->id_session);
                    if($cek==1 OR $this->session->level=='admin'){
                      echo "<li><a href='".base_url().$this->uri->segment(1)."/reseller'><i class='fa fa-circle-o'></i> Data Pemilik</a></li>";
                    }

                    $cek=$this->model_app->umenu_akses("kategori_produk",$this->session->id_session);
                    if($cek==1 OR $this->session->level=='admin'){
                      echo "<li><a href='".base_url().$this->uri->segment(1)."/kategori_produk'><i class='fa fa-circle-o'></i> Kategori Kost</a></li>";
                    }

                    $cek=$this->model_app->umenu_akses("produk",$this->session->id_session);
                    if($cek==1 OR $this->session->level=='admin'){
                      echo "<li><a href='".base_url().$this->uri->segment(1)."/produk'><i class='fa fa-circle-o'></i> Data Kost</a></li>";
                    }

                  ?>
                </ul>
              </li>

              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Menu Utama</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("identitaswebsite",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/identitaswebsite'><i class='fa fa-circle-o'></i>Website</a></li>";
                }

                $cek=$this->model_app->umenu_akses("menuwebsite",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/menuwebsite'><i class='fa fa-circle-o'></i>Menu</a></li>";
                }

                $cek=$this->model_app->umenu_akses("halamanbaru",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/halamanbaru'><i class='fa fa-circle-o'></i> Halaman Depan</a></li>";
                }
              ?>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Website</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("logowebsite",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/logowebsite'><i class='fa fa-circle-o'></i> Logo Website</a></li>";
                }

                $cek=$this->model_app->umenu_akses("templatewebsite",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/templatewebsite'><i class='fa fa-circle-o'></i> Template Website</a></li>";
                }

                $cek=$this->model_app->umenu_akses("background",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/background'><i class='fa fa-circle-o'></i> Background Website</a></li>";
                }
              ?>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Pesan</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("alamat",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/alamat'><i class='fa fa-circle-o'></i> Alamat Kontak</a></li>";
                }

                $cek=$this->model_app->umenu_akses("pesanmasuk",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/pesanmasuk'><i class='fa fa-circle-o'></i> Pesan Masuk</a></li>";
                }
              ?>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-th-list"></i> <span>Data Users</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("manajemenuser",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/manajemenuser'><i class='fa fa-circle-o'></i>Data User</a></li>";
                }

              ?>
              </ul>
            </li>

            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_manajemenuser/<?php echo $this->session->username; ?>"><i class="fa fa-edit"></i> <span>Edit Profile</span></a></li>
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>
