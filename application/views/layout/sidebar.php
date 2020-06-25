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
                <p>User</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?= site_url('kriteria') ?>"><i class="fa fa-file-pdf-o"></i> <span>Kriteria</span></a></li>
            <li><a href="<?= site_url('mahasiswa') ?>"><i class="fa fa-user"></i> <span>Mahasiswa</span></a></li>
            <!-- ini fungsi bikin menu -->
            <li><a href="#"><i class="fa fa-user"></i> <span>Pendaftar</span></a></li>
             <!-- sampe sini, lu bikin dari tag <li> sampe </li> sesuai sama menu yang lu inginkan  -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>