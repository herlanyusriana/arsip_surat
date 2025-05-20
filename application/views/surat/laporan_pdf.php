<!DOCTYPE html>
<html>
<head>
  <title><?= $title; ?></title>
  <style>
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid #000; padding: 8px; font-size: 12px; }
  </style>
</head>
<body>
  <h3 style="text-align: center;">Laporan Surat Masuk</h3>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>No Arsip</th>
        <th>Perihal</th>
        <th>Asal Surat</th>
        <th>Tanggal Masuk</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; foreach ($surat as $s): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $s->no_arsip ?></td>
        <td><?= $s->perihal ?></td>
        <td><?= $s->asal_surat ?></td>
        <td><?= $s->tanggal_masuk ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>
