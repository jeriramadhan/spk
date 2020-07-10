<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Rangking
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Rangking</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit <?= $data->nama ?></h3>
            </div>

            <form role="form" action="<?= site_url('rangking/update/' . $data->id) ?>" method="post" style="padding: 10px 20px">
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
                        <label>Pengiriman CV</label>
                        <input type="number" class="form-control" name="c1" placeholder="Pengiriman CV" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Kehadiran diseluruh rangkaian acara</label>
                        <input type="number" class="form-control" name="c2" placeholder="Kehadiran diseluruh rangkaian acara" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Pembuatan Script</label>
                        <input type="number" class="form-control" name="c3" placeholder="Pembuatan Script" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Video Siaran</label>
                        <input type="number" class="form-control" name="c4" placeholder="Video Siaran" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Kualitas vokal</label>
                        <input type="number" class="form-control" name="c5" placeholder="Kualitas vokal" required>
                    </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </section>
</div>