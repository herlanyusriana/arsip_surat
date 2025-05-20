<div class="section-header">
    <h1>Rekap Surat Masuk</h1>
</div>

<div class="section-body">
    <form method="GET" action="<?= base_url('surat/rekap'); ?>" class="mb-4 row">
        <div class="form-group col-md-4">
            <label>Dari Tanggal</label>
            <input type="date" name="start" class="form-control" value="<?= set_value('start'); ?>">
        </div>
        <div class="form-group col-md-4">
            <label>Sampai Tanggal</label>
            <input type="date" name="end" class="form-control" value="<?= set_value('end'); ?>">
        </div>
         <div class="form-group col-md-4">
            <label>&nbsp;</label>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary mr-2">Tampilkan</button>
                <?php if ($this->input->get('start') && $this->input->get('end')): ?>
                    <a href="<?= base_url('surat/print_rekap_all?start=' . $this->input->get('start') . '&end=' . $this->input->get('end')) ?>" target="_blank" class="btn btn-danger">
                        <i class="fas fa-file-pdf"></i> Cetak PDF
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </form>

    <?php if (!empty($surat)) : ?>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No Arsip</th>
                    <th>Perihal</th>
                    <th>Tanggal Surat Masuk</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($surat as $s) : ?>
                    <tr>
                        <td><?= $s->no_arsip; ?></td>
                        <td><?= $s->perihal; ?></td>
                        <td><?= $s->tanggal_masuk; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>
