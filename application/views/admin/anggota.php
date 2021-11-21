<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Anggota</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/dashboard_admin/index'; ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Anggota</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="container-fluid">
    <button type="button" class="btn btn-sm=4 btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_anggota"><i class="fas fa-plus fa-sm"></i>Tambah Anggota</button>

    <table class="table table-bordered bg-white">
      <tr>
        <th class="text-center">NO</th>
        <th class="text-center">KODE</th>
        <th class="text-center">NAMA LENGKAP</th>
        <th class="text-center">NPM</th>
        <th class="text-center">PRODI</th>
        <th colspan="3" class="text-center">AKSI</th>
      </tr>

      <?php
      $no = 1;
      foreach ($anggota as $member) :
      ?>

        <tr>
          <td class="text-center"><?php echo $no++ ?></td>
          <td class="text-center"><?php echo $member->Id_Anggota ?></td>
          <td class="text-center"><?php echo $member->Nama ?></td>
          <td class="text-center"><?php echo $member->NPM ?></td>
          <td class="text-center"><?php echo $member->Prodi ?></td>
          </td>
          <td class="text-center"><?php echo anchor('admin/anggota/edit/' . $member->Id_Anggota, '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
          <td class="text-center"><?php echo anchor('admin/anggota/hapus/' . $member->Id_Anggota, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

        </tr>

      <?php endforeach; ?>
    </table>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="tambah_anggota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA ANGGOTA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url() . 'admin/anggota/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label>Kode</label>
              <input type="text" name="Id_Anggota" class="form-control mb-2">
            </div>

            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="Nama" class="form-control mb-2">
            </div>

            <div class="form-group">
              <label>NPM</label>
              <input type="text" name="NPM" class="form-control mb-2">
            </div>

            <div class="form-group">
              <label>Prodi</label>
              <input type="text" name="Prodi" class="form-control mb-2">
            </div>

            <div class="form-group">
              <label>Foto</label><br>
              <input type="File" name="Photo" class="form-control mb-2">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

        </form>

      </div>
    </div>
  </div>


</main>