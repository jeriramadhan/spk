<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pendaftar
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Pendaftar</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="<?= site_url('') ?>" class="btn btn-success">Tambah</a>
            </div>

            <div class="box-body">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <!-- bikin paramater pendaftar yang lu mau masukkin -->
                            <th width="15" style="text-align:center">No</th>
                            <th width="250" style="text-align:center">Nama</th>
                            <th width="150" style="text-align:center">Prodi</th>
                            <th width="100" style="text-align:center">Fakultas</th>
                            <th width="100" style="text-align:center">No Telp</th>
                            <th width="150" style="text-align:center">Email</th>
                            <th width="50" style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
    })
</script>