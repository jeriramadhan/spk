<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengaturan Pengumuman
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Pengaturan Pengumuman</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Pengaturan Pengumuman</h3>
            </div>

            <form role="form" action="<?= site_url('kriteria/status') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                   <?php foreach ($data as $d) { ?> 
                        <div class="form-group col-md-4">
                            <label>Status Pengumuman = 
                            <?php if($d->status_pengumuman == 1){
                              echo "Belum Pengumuman";
                            }else{
                              echo "Sedang Di Umumkan";
                            }  ?></label>
                          <select id="status_pengumuman" name="status_pengumuman">
                            <option value="1">Belum Pengumuman</option>
                            <option value="2">Sedang Diumumkan</option>
                          </select>
                        </div>
                    <?php } ?> 
                </div> 
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper --> 