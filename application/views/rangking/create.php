<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Rangking
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Rangking</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah baru</h3>
            </div>

            <form role="form" action="<?= site_url('rangking/create') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Enter Nama" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr />
                        <small>Penilaian</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Pengiriman CV</label>
                        <input type="number" class="form-control" name="c1" placeholder="Enter Kualitas Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label> Kehadiran diseluruh rangkaian acara</label>
                        <input type="number" class="form-control" name="c2" placeholder="Enter Kuantitas Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Pembuatan Script</label>
                        <input type="number" class="form-control" name="c3" placeholder="Enter Inisiatif Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Video Siaran</label>
                        <input type="number" class="form-control" name="c4" placeholder="Enter Disiplin Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Kualitas vokal</label>
                        <input type="number" class="form-control" name="c5" placeholder="Tanggung Jawab pada Pekerjaan" required>
                    </div>

                    
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </section>
</div>