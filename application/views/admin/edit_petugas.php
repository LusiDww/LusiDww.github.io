<main id="main" class="main">

    <div class="pagetitle">
        <h1><i class="fas fa-edit"></i>Edit Data Petugas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/dashboard_admin/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Petugas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">

        <?php foreach ($petugas as $admin) : ?>

            <form method="post" action="<?php echo base_url() . 'admin/petugas/update' ?>">

                <div class="for-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="Nama" class="form-control" value="<?php echo $admin->Nama ?>">
                </div>

                <div class="for-group">
                    <label>Email</label>
                    <input type="hidden" name="Id_Admin" class="form-control" value="<?php echo $admin->Id_Admin ?>">
                    <input type="text" name="Email" class="form-control" value="<?php echo $admin->Email ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

            </form>
        <?php endforeach ?>
    </div>

</main>