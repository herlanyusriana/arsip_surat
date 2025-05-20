<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Surat Masuk</h1>

    <form action="<?= base_url('surat/update') ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $surat->id ?>">

        <div class="form-group">
            <label>Kode Klasifikasi</label>
            <input type="text" name="kode_klasifikasi" class="form-control" value="<?= $surat->kode_klasifikasi ?>">
        </div>

        <div class="form-group">
            <label>No Arsip</label>
            <input type="text" name="no_arsip" class="form-control" value="<?= $surat->no_arsip ?>">
        </div>

        <div class="form-group">
            <label>Perihal</label>
            <input type="text" name="perihal" class="form-control" value="<?= $surat->perihal ?>">
        </div>

        <div class="form-group">
            <label>Kurun Waktu</label>
            <input type="text" name="kurun_waktu" class="form-control" value="<?= $surat->kurun_waktu ?>">
        </div>

        <div class="form-group">
            <label>Asal Surat</label>
            <input type="text" name="asal_surat" class="form-control" value="<?= $surat->asal_surat ?>">
        </div>

        <div class="form-group">
            <label>Media Arsip</label>
            <input type="text" name="media_arsip" class="form-control" value="<?= $surat->media_arsip ?>">
        </div>

        <div class="form-group">
            <label>Tanggal Surat Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" value="<?= $surat->tanggal_masuk ?>">
        </div>

        <div class="form-group">
            <label>Tanggal Surat</label>
            <input type="date" name="tanggal_surat" class="form-control" value="<?= $surat->tanggal_surat ?>">
        </div>

        <div class="form-group">
            <label>Lembar</label>
            <input type="number" name="lembar" class="form-control" value="<?= $surat->lembar ?>">
        </div>

        <div class="form-group">
            <label>Folder Boks</label>
            <input type="text" name="folder_boks" class="form-control" value="<?= $surat->folder_boks ?>">
        </div>
        <div class="form-group">
    <label>Upload File PDF (Opsional)</label>
    <input type="file" name="file_pdf" class="form-control-file">

    <?php if (!empty($surat->file_pdf)): ?>
        <small>File saat ini: <a href="<?= base_url('uploads/' . $surat->file_pdf) ?>" target="_blank"><?= $surat->file_pdf ?></a></small>
    <?php endif; ?>
</div>


        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('surat') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
