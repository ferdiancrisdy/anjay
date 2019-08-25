    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div class="container-fluid">
        <center>
          <h3>INPUT PEMINJAMAN BARANG</h3>
        </center>
        <hr>
        <div>&nbsp;</div>
        <div class="row">
          <div class="form-group col-md-12">
            <form action="<?php echo base_url('crud_peminjaman/edit_data/'); ?>" method="post">
            <div class="form-group row">
                <label for="" class="col-form-label col-md-2">ID Peminjaman</label>
                <div class="col-md-8 ">
                    <input type="text" name="id_peminjaman" class="form-control" value="<?= $peminjaman[0]['id_peminjaman'] ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-form-label col-md-2">Pegawai</label>
                <div class="col-md-8 ">
                <select name="id_pegawai" id="id_pegawai" class="form-control">
                    <?php foreach($pegawai as $val) : ?>
                      <option value="<?= $val->id_pegawai ?>" <?= ($val->id_pegawai === $peminjaman[0]['id_pegawai']) ? 'selected' : '' ?> ><?= $val->nama_pegawai ?></option>
                    <?php endforeach; ?>
                </select>
                </div>
              </div>
              <div class="form-group row ">
                <label for="" class="col-form-label col-md-2">Tanggal Peminjaman</label>
                <div class="col-md-8 input-group mb-3">
                    <input type="text" id="tanggal_pinjam" readonly autocomplete="off" name="tanggal_peminjaman" class="form-control" value="<?= date('Y M d', strtotime($peminjaman[0]['tanggal_peminjaman'])) ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-form-label col-md-2">Tanggal Kembali</label>
                <div class="col-md-8">
                    <input type="text" id="tanggal_pinjam" name="tanggal_kembali" readonly autocomplate="" class="form-control" value="<?= date('Y M d', strtotime($peminjaman[0]['tanggal_kembali'])) ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-form-label col-md-2">Status Peminjaman</label>
                <div class="col-md-8 ">
                  <select name="status_peminjaman" class="form-control">
                    <option value="dipinjam">Dipinjam</option>
                    <option value="dikembalikan">Dikembalikan</option>
                  </select>
                </div>
              </div>
              <button type="submit" value="simpan" class="btn btn-success">Simpan</button>
            </form>
          </div>
        </div>
    </main>
    <!-- page-content" -->
  </div>

  <script>
    $('input#tanggal_pinjam').datepicker();
  </script>