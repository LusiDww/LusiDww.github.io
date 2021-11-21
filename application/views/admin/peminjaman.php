<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Peminjaman Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/dashboard_admin/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Peminjaman Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
        <button type="button" class="btn btn-sm=4 btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_data"><i class="fas fa-plus fa-sm"></i>Tambah Buku</button>

        <table class="table table-bordered bg-white">
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">KODE</th>
                <th class="text-center">NAMA LENGKAP</th>
                <th class="text-center">NPM</th>
                <th class="text-center">PROGRAM STUDI</th>
                <th class="text-center">BUKU YANG DIPINJAM</th>
                <th class="text-center">TANGGAL PEMINJAMAN BUKU</th>
                <th class="text-center">JUMLAH BUKU</th>
                <th class="text-center">HARGA PEMINJAMAN BUKU</th>
                <th colspan="3" class="text-center">AKSI</th>
            </tr>

            <?php
            $no = 1;
            foreach ($peminjaman as $peminjaman) :
            ?>

                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-center"><?php echo $peminjaman->Id_Peminjam ?></td>
                    <td class="text-center"><?php echo $peminjaman->Nama ?></td>
                    <td class="text-center"><?php echo $peminjaman->NPM ?></td>
                    <td class="text-center"><?php echo $peminjaman->Prodi ?></td>
                    <td class="text-center"><?php echo $peminjaman->Buku ?></td>
                    <td class="text-center"><?php echo $peminjaman->Tgl_Pinjam ?></td>
                    <td class="text-center"><?php echo $peminjaman->Jumlah ?></td>
                    <td class="text-center"><?php echo $peminjaman->Harga ?></td>

                    <td class="text-center"><?php echo anchor('admin/peminjaman/edit/' . $peminjaman->Id_Peminjam, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                    <td class="text-center"><?php echo anchor('admin/peminjaman/hapus/' . $peminjaman->Id_Peminjam, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

                </tr>

            <?php endforeach; ?>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambah_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PEMINJAMAN BUKU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'admin/peminjaman/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode</label>
                            <input type="text" name="Id_Peminjam" class="form-control mb-2">
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
                            <label>Program studi</label>
                            <input type="text" name="Prodi" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Buku yang dipinjam</label>
                            <input type="text" name="Buku" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Tanggal peminjaman</label>
                            <input type="text" name="Tgl_Pinjam" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Jumlah buku yang dipinjam</label>
                            <input type="text" name="Jumlah" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Harga peminjaman buku</label>
                            <input type="text" name="Harga" class="form-control mb-2">
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