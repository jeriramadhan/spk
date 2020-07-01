<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Mahasiswa
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Mahasiswa</a></li>
            <li class="active">Update</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update <?= $data->nama ?></h3>
            </div>

            <form role="form" action="<?= site_url('mahasiswa/update/' . $data->id) ?>" method="post" style="padding: 10px 20px">
                <input type="hidden" name="id" value="<?= $data->id ?>" />
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" placeholder="Enter Nama">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr />
                        <small>Penilaian</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Kualitas Kerja</label>
                        <input type="number" class="form-control" name="c1" value="<?= $data->c1 ?>" placeholder="Enter Kualitas Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Kuantitas Kerja</label>
                        <input type="number" class="form-control" name="c2" value="<?= $data->c2 ?>" placeholder="Enter Kuantitas Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Inisiatif Kerja</label>
                        <input type="number" class="form-control" name="c3" value="<?= $data->c3 ?>" placeholder="Enter Inisiatif Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c4" value="<?= $data->c4 ?>" placeholder="Enter Disiplin Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Tanggung Jawab pada Pekerjaan</label>
                        <input type="number" class="form-control" name="c5" value="<?= $data->c5 ?>" placeholder="Tanggung Jawab pada Pekerjaan" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c6" value="<?= $data->c6 ?>" placeholder="Motivasi Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c7" value="<?= $data->c7 ?>" placeholder="Motivasi dalam Bekerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c8" value="<?= $data->c8 ?>" placeholder="Pemahaman dalam Bekerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c9" value="<?= $data->c9 ?>" placeholder="Penyesuaian Diri dalam Lingkungan" required>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </section>
</div>