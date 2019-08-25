    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div class="container-fluid">
        <center>
          <h3>INFO PEMINJAMAN</h3>
        </center>
        <hr>
        <a href="<?php echo base_url('home/index') ?>"class="btn btn-info" style="color:white;">
            <i class="fa fa-arrow-left"> KEMBALI</i>
        </a>
        <div class="row">
          <div class="form-group col-md-12">
          <?php 
            foreach($peminjaman as $p){ ?>
            <table border="0" >
                <tr>
                    <th style="padding:10%;">KODE PEMINJAM</th>
                    <td style="padding-left:20%;">:</td>
                    <td style="padding-left:25%;" width=50%><?= $peminjaman[0]['id_peminjaman'] ?></td>
                </tr>
                <tr>
                    <th style="padding:10%;">PEGAWAI</th>
                    <td style="padding-left:20%;">:</td>
                    <td style="padding-left:25%;" width=50%><?= $peminjaman[0]['nama_pegawai'] ?></td>
                </tr>
                <tr>
                    <th style="padding:10%;">TANGGAL PEMINJAMAN</th>
                    <td style="padding-left:20%;">:</td>
                    <td style="padding-left:25%;" width=50%><?= $peminjaman[0]['tanggal_peminjaman'] ?></td>
                </tr>
                <tr>
                    <th style="padding:10%;">TANGGAL KEMBALI</th>
                    <td style="padding-left:20%;">:</td>
                    <td style="padding-left:25%;" width=50%><?= $peminjaman[0]['tanggal_kembali'] ?></td>
                </tr>
                <tr>
                    <th style="padding:10%;">STATUS PEMINJAMAN</th>
                    <td style="padding-left:20%;">:</td>
                    <td style="padding-left:25%;" width=50%><?= $peminjaman[0]['status_peminjaman'] ?></td>
                </tr>
            </table>
          </div>
        </div>
        <div style="text-align:right;">
            <a href="<?php echo base_url('crud_peminjaman/edit/'.$peminjaman[0]['id_peminjaman']) ?>"class="btn btn-success" style="color:white;">
                <i class="fa fa-cut"> EDIT </i>
            </a>
            <a href="<?php echo base_url('crud_peminjaman/hapus/'.$peminjaman[0]['id_peminjaman']) ?>"class="btn btn-danger" style="color:white;">
                <i class="fa fa-trash"> HAPUS </i>
            </a>
        </div>
        <?php } ?>
        
    </main>
    </div>
    <!-- page-content" -->