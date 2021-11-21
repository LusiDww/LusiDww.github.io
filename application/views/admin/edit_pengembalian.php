<main id="main" class="main">

    <div class="pagetitle">
        <h1><i class="fas fa-edit"></i>Edit Data Pengembalian Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/dashboard_admin/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Pengembalian Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">

        <?php foreach ($pengembalian as $pengembalian) : ?>

            <form method="post" action="<?php echo base_url() . 'admin/pengembalian/update' ?>">

                <div class="for-group">
                    <label>Kode</label>
                    <input type="text" name="Id_Pengembalian" class="form-control" value="<?php echo $pengembalian->Id_Pengembalian ?>">
                </div>

                <div class="for-group">
                    <label>Nama Lengkap</label>
                    <input type="hidden" name="Id_Pengembalian" class="form-control" value="<?php echo $pengembalian->Id_Pengembalian ?>">
                    <input type="text" name="Nama" class="form-control" value="<?php echo $pengembalian->Nama ?>">
                </div>

                <div class="for-group">
                    <label>NPM</label>
                    <input type="text" name="NPM" class="form-control" value="<?php echo $pengembalian->NPM ?>">
                </div>

                <div class="for-group">
                    <label>Program Studi</label>
                    <input type="text" name="Prodi" class="form-control" value="<?php echo $pengembalian->Prodi ?>">
                </div>

                <div class="for-group">
                    <label>Buku yang Dipinjam</label>
                    <input type="text" name="Buku" class="form-control" value="<?php echo $pengembalian->Buku ?>">
                </div>

                <div class="for-group">
                    <label>Tanggal peminjaman buku</label>
                    <input type="text" name="Tgl_Peminjaman" class="form-control" value="<?php echo $pengembalian->Tgl_Peminjaman ?>">
                </div>

                <div class="for-group">
                    <label>Tanggal pengembalian buku</label>
                    <input type="text" name="Tgl_Pengembalian" class="form-control" value="<?php echo $pengembalian->Tgl_Pengembalian ?>">
                </div>

                <div class="for-group">
                    <label>Jumlah buku</label>
                    <input type="text" name="Jumlah" class="form-control" value="<?php echo $pengembalian->Jumlah ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

            </form>
        <?php endforeach ?>
    </div>

</main>