<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Tambah Data Surat Masuk</h1>

 <form action="<?= base_url('surat/simpan') ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Kode Klasifikasi</label>
      <input type="text" name="kode_klasifikasi" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Nomor Arsip</label>
      <input type="text" name="no_arsip" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Perihal</label>
      <input type="text" name="perihal" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Kurun Waktu</label>
      <input type="text" name="kurun_waktu" class="form-control">
    </div>
    <div class="form-group">
      <label>Asal Surat</label>
      <input type="text" name="asal_surat" class="form-control">
    </div>
    <div class="form-group">
      <label>Media Arsip</label>
      <input type="text" name="media_arsip" class="form-control">
    </div>
    <div class="form-group">
      <label>Tanggal Masuk</label>
      <input type="date" name="tanggal_masuk" class="form-control">
    </div>
    <div class="form-group">
      <label>Tanggal Surat</label>
      <input type="date" name="tanggal_surat" class="form-control">
    </div>
    <div class="form-group">
      <label>Lembar</label>
      <input type="number" name="lembar" class="form-control">
    </div>
    <div class="form-group">
      <label>Folder/Boks</label>
      <input type="text" name="folder_boks" class="form-control">
    </div>
  <div class="form-group">
    <label for="file_pdf">Upload File PDF</label>
    <input type="file" name="file_pdf" accept="application/pdf" class="form-control" required>
  </div>


    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('surat') ?>" class="btn btn-secondary">Kembali</a>
  </form>
</div>
