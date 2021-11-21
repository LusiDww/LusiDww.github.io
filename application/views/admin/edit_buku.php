<main id="main" class="main">

    <div class="pagetitle">
        <h1><i class="fas fa-edit"></i>Edit Data Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/dashboard_admin/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">

        <?php foreach ($buku as $buku) : ?>

            <form method="post" action="<?php echo base_url() . 'admin/buku/update' ?>">

                <div class="for-group">
                    <label>Judul Buku</label>
                    <input type="text" name="Judul" class="form-control" value="<?php echo $buku->Judul ?>">
                </div>

                <div class="for-group">
                    <label>Penulis</label>
                    <input type="hidden" name="Id_Buku" class="form-control" value="<?php echo $buku->Id_Buku ?>">
                    <input type="text" name="Penulis" class="form-control" value="<?php echo $buku->Penulis ?>">
                </div>

                <div class="for-group">
                    <label>Penerbit</label>
                    <input type="text" name="Penerbit" class="form-control" value="<?php echo $buku->Penerbit ?>">
                </div>

                <div class="for-group">
                    <label>Tahun</label>
                    <input type="text" name="Tahun" class="form-control" value="<?php echo $buku->Tahun ?>">
                </div>

                <div class="for-group">
                    <label>Jumlah</label>
                    <input type="text" name="Jumlah" class="form-control" value="<?php echo $buku->Jumlah ?>">
                </div>

                <div class="for-group">
                    <label>Buku yang Dipinjam</label>
                    <input type="text" name="Dipinjam" class="form-control" value="<?php echo $buku->Dipinjam ?>">
                </div>

                <div class="for-group">
                    <label>Harga</label>
                    <input type="text" name="Harga" class="form-control" value="<?php echo $buku->Harga ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

            </form>
        <?php endforeach ?>
    </div>

</main>