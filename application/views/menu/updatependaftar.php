<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pendaftar
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Pendaftar</a></li>
            <li class="active">Update</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update <?= $data->nama ?></h3>
            </div>

            <form role="form" action="<?= site_url('menu/updatePendaftar/' . $data->id) ?>" method="post" style="padding: 10px 20px">
                <input type="hidden" name="id" value="<?= $data->id ?>" />
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" required>
                        </div>
                        <!-- ganti sesuai kolom -->
                        <div class="form-group col-md-4">
                            <label>Prodi</label>
                            <input type="text" class="form-control" name="prodi" value="<?= $data->prodi ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Fakultas</label>
                            <input type="text" class="form-control" name="fakultas" value="<?= $data->fakultas ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="no_hp" value="<?= $data->no_hp ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?= $data->email ?>" required>
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </section>
</div>
