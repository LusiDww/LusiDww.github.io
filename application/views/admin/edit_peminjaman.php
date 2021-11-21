<main id="main" class="main">

    <div class="pagetitle">
        <h1><i class="fas fa-edit"></i>Edit Data Peminjaman Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/dashboard_admin/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Peminjaman Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">

        <?php foreach ($peminjaman as $peminjaman) : ?>

            <form method="post" action="<?php echo base_url() . 'admin/peminjaman/update' ?>">

                <div class="for-group">
                    <label>Kode</label>
                    <input type="text" name="Id_Peminjam" class="form-control" value="<?php echo $peminjaman->Id_Peminjam ?>">
                </div>

                <div class="for-group">
                    <label>Nama Lengkap</label>
                    <input type="hidden" name="Id_Peminjam" class="form-control" value="<?php echo $peminjaman->Id_Peminjam ?>">
                    <input type="text" name="Nama" class="form-control" value="<?php echo $peminjaman->Nama ?>">
                </div>

                <div class="for-group">
                    <label>NPM</label>
                    <input type="text" name="NPM" class="form-control" value="<?php echo $peminjaman->NPM ?>">
                </div>

                <div class="for-group">
                    <label>Program Studi</label>
                    <input type="text" name="Prodi" class="form-control" value="<?php echo $peminjaman->Prodi ?>">
                </div>

                <div class="for-group">
                    <label>Buku yang Dipinjam</label>
                    <input type="text" name="Buku" class="form-control" value="<?php echo $peminjaman->Buku ?>">
                </div>

                <div class="for-group">
                    <label>Tanggal peminjaman buku</label>
                    <input type="text" name="Tgl_Pinjam" class="form-control" value="<?php echo $peminjaman->Tgl_Pinjam ?>">
                </div>

                <div class="for-group">
                    <label>Jumlah buku</label>
                    <input type="text" name="Jumlah" class="form-control" value="<?php echo $peminjaman->Jumlah ?>">
                </div>

                <div class="for-group">
                    <label>Harga peminjaman buku</label>
                    <input type="text" name="Harga" class="form-control" value="<?php echo $peminjaman->Harga ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

            </form>
        <?php endforeach ?>
    </div>

</main>