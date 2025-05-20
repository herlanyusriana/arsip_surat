<h3 style="text-align: center;">Laporan Rekapitulasi Surat Masuk</h3>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>No Arsip</th>
      <th>Perihal</th>
      <th>Tanggal Surat Masuk</th>
      <th>Asal Surat</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach ($rekap as $r): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $r->no_arsip; ?></td>
      <td><?= $r->perihal; ?></td>
      <td><?= $r->tanggal_masuk; ?></td>
      <td><?= $r->asal_surat; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
