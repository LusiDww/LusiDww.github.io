<main id="main" class="main">

  <div class="pagetitle">
    <h1><i class="fas fa-edit"></i>Edit Data Anggota</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/dashboard_admin/index'; ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Anggota</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="container-fluid">

    <?php foreach ($anggota as $member) : ?>

      <form method="post" action="<?php echo base_url() . 'admin/anggota/update' ?>">

        <div class="for-group">
          <label>Nama Lengkap</label>
          <input type="text" name="Nama" class="form-control" value="<?php echo $member->Nama ?>">
        </div>

        <div class="for-group">
          <label>NPM</label>
          <input type="hidden" name="Id_Anggota" class="form-control" value="<?php echo $member->Id_Anggota ?>">
          <input type="text" name="NPM" class="form-control" value="<?php echo $member->NPM ?>">
        </div>

        <div class="for-group">
          <label>Program Studi</label>
          <input type="text" name="Prodi" class="form-control" value="<?php echo $member->Prodi ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

      </form>
    <?php endforeach ?>
  </div>

</main>