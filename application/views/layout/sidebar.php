<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('/assets/AdminLTE-2.4.10/dist/img/avatar.png') ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('nama');?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <!-- ini fungsi bikin menu -->
            <li><a href="<?= site_url('menu') ?>"><i class="fa fa-user"></i> <span>Home</span></a></li>
            <li><a href="<?= site_url('menu/pendaftar') ?>"><i class="fa fa-user"></i> <span>Pendaftar</span></a></li>
            <li><a href="<?= site_url('mahasiswa') ?>"><i class="fa fa-user"></i> <span>Mahasiswa</span></a></li>
            <li> <a href="#"> <i class="fa fa-files-o"></i> <span>Kriteria</span></a>
                <ul class="treeview">
                    <li><a href="<?= site_url('kriteria/keterangan') ?>"><i class="fa fa-circle-o"></i> <span>Update Kriteria</span></a></li>
                    <li><a href="<?= site_url('kriteria/status') ?>"><i class="fa fa-circle-o"></i> <span>Status</span></a></li>
                    <li><a href="<?= site_url('kriteria/nilai') ?>"><i class="fa fa-circle-o"></i> <span> Nilai Batas</span></a></li>
                </ul>
            </li>
            <li><a href="<?= site_url('kriteria') ?>"><i class="fa fa-file-pdf-o"></i> <span>Atribut</span></a></li>
            <li><a href="<?= site_url('menu/hasil') ?>"><i class="fa fa-user"></i> <span>Hasil</span></a></li>            
            <li><a href="<?= site_url('menu/ranking') ?>"><i class="fa fa-user"></i> <span>Ranking</span></a></li>
             <!-- sampe sini, lu bikin dari tag <li> sampe </li> sesuai sama menu yang lu inginkan  -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>