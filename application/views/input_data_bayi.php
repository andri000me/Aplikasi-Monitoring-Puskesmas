<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('template_a');?>
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'config/top-menu.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'config/side.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <!-- Main content -->
    <section class="content">
    <div class="row">
  <div class="col-md-12">
    <div class="box">

      <!-- /.box-header -->
    
 <div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Data Bayi Baru Lahir</h3>
        <?php
          echo $this->session->flashdata('msg');
          ?>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
                                  

    <table id="kategori" class="table table-bordered table-striped">
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="box-body">
         
          <div class="form-group">
            <input type="hidden" class="form-control" name="create_by" value="<?php echo $this->session->userdata('id_user'); ?>">

            <input type="hidden" class="form-control" name="username" value="<?php echo $this->session->userdata('username'); ?>">

             
            <input type="hidden" class="form-control" name="nm_desa" value="<?php echo $this->session->userdata('kategori'); ?>">

             
          
          </div>
<div class="form-group">
<label>Kategori</label>


    
            <select name="kategori" class="form-control" required="">
              
              <option value="Ibu Hamil">Ibu Hamil</option>
              <option value="Bayi Lahir">Bayi Lahir</option>
              <option value="Imunisasi">Imunisasi</option>
<option value="Wanita Subur">Wanita Subur</option>
<option value="Akseptor KB">akseptor KB</option>

            
            </select>
</div>
<div class="form-group">
            <label>Nama ibu</label>
              <input type="text" class="form-control" name="nama_ibu" required="" placeholder="Silahkan Input Nama Ibu">
          
          </div>

          <div class="form-group">
            <label>NIK</label>
              <input type="number" class="form-control" name="no_induk" required="" placeholder="Silahkan Input NIK">
          
          </div>


          <div class="form-group">
            <label>Hamil Ke</label>
              <input type="text" class="form-control" name="hml_ke" required="">
          
          </div>
          <div class="form-group">
            <label>Jari Tangan</label>
              <input type="text" class="form-control" name="jari_tangan" required="">
          
          </div>
           <div class="form-group">
            <label>Jari Kaki</label>
              <input type="text" class="form-control" name="jari_kaki" required="" >
          
          </div>
          <div class="form-group">
            <label>Posisi dan Bentuk</label>
              <input type="text" class="form-control" name="posisi_dan_bentuk" required="">
          
          </div>
          <div class="form-group">
            <label>Pergerakan</label>
              <input type="text" class="form-control" name="pergerakan" required="">
          
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" required="">
              <option value="Laki-Laki">Laki-Laki</option>
<option value="Perempuan">Perempuan</option>
              </select>
              
          
          </div>
          <div class="form-group">
            <label>BAK Pertama</label>
              <input type="text" class="form-control" name="bak_pertama" required="">
          
          </div>
          <div class="form-group">
            <label>BAB Pertama</label>
              <input type="text" class="form-control" name="bab_pertama" required="">
          
          </div>
          <div class="form-group">
            <label>Menghisap ( Sucking )</label>
              <input type="text" class="form-control" name="menghisap" required="">
          
          </div>
          <div class="form-group">
            <label>Menggenggam ( Graping )</label>
              <input type="text" class="form-control" name="menggengam" required=""">
          
          </div>
          <div class="form-group">
            <label>Reflek Kaki ( Staping )</label>
              <input type="text" class="form-control" name="reflek_kaki" required="">
          
          </div>
           <div class="form-group">
            <label>Reflek Moro</label>
              <input type="text" class="form-control" name="reflek_moro" required="">
          
          </div>

          <div class="form-group">
            <label>Berat Badan</label>
              <input type="text" class="form-control" name="berat_badan" required="">
          
          </div>

          <div class="form-group">
            <label>Tinggi Badan</label>
              <input type="text" class="form-control" name="tinggi_badan" required="">
          
          </div>

           <div class="form-group">
            <label>Lingkar Kepala</label>
              <input type="text" class="form-control" name="lingkar_kepala" required="">
          
          </div>

          <div class="form-group">
            <label>Lingkar Dada</label>
              <input type="text" class="form-control" name="lingkar_dada" required="">
          
          </div>
 <div class="form-group">
            <label>LILA</label>
              <input type="text" class="form-control" name="lila" required="">
          
          </div>
          <div class="form-group">
            <label>Diagnosa</label>
              <input type="text" class="form-control" name="diagnosa" required="">
          
          </div>

          <div class="form-group">
            <label>Masalah</label>
              <input type="text" class="form-control" name="masalah" required="">
          
          </div>
           <div class="form-group">
            <label>Kebutuhan</label>
              <input type="text" class="form-control" name="kebutuhan" required="">
          
          </div>

          

           <div class="form-group">
            <label>Tanggal Hari Ini</label>
            <?php 
            $tgl = date('Y-m-d');
            { ?>
            <input type="date" class="form-control" name="created_at" required="" value="<?php echo $tgl; ?>">
            <?php }?>
          </div>
        
          
        </div>
         </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <input type="submit" name="btnsimpan" class="btn btn-primary btn-flat" value="Simpan">
          <input type="reset" class="btn btn-danger btn-flat" value="Batal">
        </div>
      </form>
    </table>
    </div>        
  </div>
</div>     
   
      <!-- /.box-body -->
    </div>
  </div>
</div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Teknologi</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('jquery_a');?>
</body>
</html>