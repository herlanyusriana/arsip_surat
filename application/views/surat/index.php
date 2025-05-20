<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Surat Masuk</h1>

    <a href="<?= base_url('surat/tambah') ?>" class="btn btn-success mb-3">+ Tambah Surat</a>

    <form method="GET" action="<?= base_url('surat') ?>" class="mb-3">
    <input type="text" name="q" class="form-control" placeholder="Cari surat..." value="<?= $this->input->get('q'); ?>">
</form>


    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light text-center">
                <tr>
                    <th>Kode Klasifikasi</th>
                    <th>No. Arsip</th>
                    <th>Perihal</th>
                    <th>Kurun Waktu</th>
                    <th>Asal Surat</th>
                    <th>Media Arsip</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Surat</th>
                    <th>Lembar</th>
                    <th>Folder Boks</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($surat as $s) : ?>
                    <tr>
                        <td><?= $s->kode_klasifikasi ?></td>
                        <td><?= $s->no_arsip ?></td>
                        <td><?= $s->perihal ?></td>
                        <td><?= $s->kurun_waktu ?></td>
                        <td><?= $s->asal_surat ?></td>
                        <td><?= $s->media_arsip ?></td>
                        <td><?= $s->tanggal_masuk ?></td>
                        <td><?= $s->tanggal_surat ?></td>
                        <td><?= $s->lembar ?></td>
                        <td><?= $s->folder_boks ?></td>
                        <td class="text-center">
    <div class="d-flex justify-content-center gap-1 flex-wrap">
        <?php if (is_admin()): ?>
            <a href="<?= base_url('surat/edit/' . $s->id) ?>" class="btn btn-warning btn-sm mx-1 mb-1">
                <i class="fas fa-edit"></i>
            </a>
            <a href="<?= base_url('surat/delete/' . $s->id) ?>" class="btn btn-danger btn-sm mx-1 mb-1" onclick="return confirm('Yakin?')">
                <i class="fas fa-trash-alt"></i>
            </a>
        <?php endif; ?>
        <a href="<?= base_url('uploads/' . $s->file_pdf) ?>" class="btn btn-info btn-sm mx-1 mb-1" target="_blank">
            <i class="fas fa-print"></i>
        </a>
    </div>
</td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
