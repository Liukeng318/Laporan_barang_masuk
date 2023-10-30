<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-3">
        <div class="card-header">
            Ayo Masukkan Laporan
        </div>

        <div class="card-body">
        	<form action="<?php echo site_url('report/addreport') ?>" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="title">*Nama Pelapor*</label>
                    <input class="form-control" type="text" name="name" value="<?= $user['name']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nik">*Nama Pengemudi*</label>
                    <input class="form-control"
                    type="text" name="nik" placeholder="Masukkan Pengemudi" value="<?= set_value('nik'); ?>">
                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rt">Vendor*</label>
                            <input class="form-control"
                            type="text" name="rt" placeholder="Masukkan Vendor" value="<?= set_value('rt'); ?>">
                            <?= form_error('rt', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rw">Nomor Kendaraan*</label>
                            <input class="form-control"
                            type="text" name="rw" placeholder="Masukkan Nomor Kendaraan" value="<?= set_value('rw'); ?>">
                            <?= form_error('rw', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="village">Jenis Material*</label>
                            <input class="form-control"
                            type="text" name="village" placeholder="Masukkan Jenis Material" value="<?= set_value('village'); ?>">
                            <?= form_error('village', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>                    
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Area Bongkar*</label>
                    <input class="form-control"
                    type="text" name="title" placeholder="Masukkan Area" value="<?= set_value('title'); ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="description">Keterangan Laporan*</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Report Description" rows="3"></textarea>
                    <?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="type">Jenis Laporan</label>
                    <select class="form-control" id="type" name="type">
                        <option value="Barang Masuk">Barang Masuk</option>
                        <option value="Barang Keluar">Barang Keluar</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="file">Attachment</label>
                    <input class="form-control-file"
                    type="file" name="file" />
                    <div class="invalid-feedback">
                        <?php echo form_error('file') ?>
                    </div>
                </div>
                <!-- button save -->
                <input class="btn btn-success" type="submit" name="btn" value="Report!" />
            </form>
        </div>

        <div class="card-footer small text-muted">
            * must be filled
        </div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
