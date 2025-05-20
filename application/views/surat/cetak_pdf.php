<!DOCTYPE html>
<html>
<head>
    <title>Surat Masuk</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        td { padding: 5px; vertical-align: top; }
    </style>
</head>
<body>

    <h3 style="text-align: center;">Detail Surat Masuk</h3>
    <table>
        <tr>
            <td><strong>Kode Klasifikasi</strong></td>
            <td>: <?= $surat->kode_klasifikasi ?></td>
        </tr>
        <tr>
            <td><strong>No Arsip</strong></td>
            <td>: <?= $surat->no_arsip ?></td>
        </tr>
        <tr>
            <td><strong>Perihal</strong></td>
            <td>: <?= $surat->perihal ?></td>
        </tr>
        <tr>
            <td><strong>Asal Surat</strong></td>
            <td>: <?= $surat->asal_surat ?></td>
        </tr>
        <tr>
            <td><strong>Tanggal Surat</strong></td>
            <td>: <?= $surat->tanggal_surat ?></td>
        </tr>
        <tr>
            <td><strong>Tanggal Masuk</strong></td>
            <td>: <?= $surat->tanggal_masuk ?></td>
        </tr>
        <tr>
            <td><strong>Media Arsip</strong></td>
            <td>: <?= $surat->media_arsip ?></td>
        </tr>
        <tr>
            <td><strong>Folder / Boks</strong></td>
            <td>: <?= $surat->folder_boks ?></td>
        </tr>
        <tr>
            <td><strong>Lembar</strong></td>
            <td>: <?= $surat->lembar ?></td>
        </tr>
    </table>

</body>
</html>
