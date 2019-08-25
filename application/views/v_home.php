    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div class="container-fluid">
        <center>
          <h3>DAFTAR PEMINJAMAN BARANG</h3>
        </center>
        <hr>
        <div>&nbsp;</div>
        <div class="row">
          <div class="form-group col-md-12">
            <div>
                <a href="<?php echo base_url('crud_peminjaman');?>" class="btn btn-dark" style="margin-left:88%; margin-bottom:20px;"> 
                  <i class="fa fa-user-plus"> Tambah </i> 
                </a>
            </div>
            <table border="0" width="90%">
              <tr class="table">
                <th style="padding:10px;">No</th>
                <th style="padding:10px;">Pegawai</th>
                <th style="padding:10px;">Tanggal Peminjaman</th>
                <th style="padding:10px;">Tanggal Kembali</th>
                <th style="padding:10px;">Status Peminjaman</th>
                <?php if($this->session->userdata('level') != 3){?>
                  <th style="padding:10px;">Action</th>
                <?php } ?>
              </tr>
              <?php 
                $no = 1;
                foreach($peminjaman as $p){ ?>
                <tr>
                  <td style="padding:10px;"><?php echo $no++ ?></td>
                  <td style="padding:10px;"><?php echo $p->nama_pegawai ?></td>
                  <td style="padding:10px;"><?php echo $p->tanggal_peminjaman ?></td>
                  <td style="padding:10px;"><?php echo $p->tanggal_kembali ?></td>
                  <td style="padding:10px;"><?php echo $p->status_peminjaman ?></td>
                  <?php if($this->session->userdata('level') != 3){?>
                    <td  style="padding:10px;">
                      <div>
                        <a href="<?= base_url('crud_peminjaman/edit/'.$p->id_peminjaman);?>">
                          <i class="fa fa-cut"></i>
                          &nbsp;
                        </a>
                        <a href="<?= base_url('crud_peminjaman/info/'.$p->id_peminjaman);?>">
                          <i class="fa fa-info"></i>
                          &nbsp;
                        </a>
                        <a href="<?= base_url('crud_peminjaman/hapus/'.$p->id_peminjaman);?>">
                          <i class="fa fa-trash" style="color:red;"></i>
                        </a>
                      </div>
                    </td>
                  <?php }?>
                </tr>
                  <?php } ?>
              </table>
          </div>
        </div>
    </main>
    </div>
    <!-- page-content" -->