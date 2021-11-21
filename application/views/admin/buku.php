<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/dashboard_admin/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
        <button type="button" class="btn btn-sm=4 btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_buku"><i class="fas fa-plus fa-sm"></i>Tambah Buku</button>

        <table class="table table-bordered bg-white">
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">KODE</th>
                <th class="text-center">JUDUL BUKU</th>
                <th class="text-center">PENULIS</th>
                <th class="text-center">PENERBIT</th>
                <th class="text-center">TAHUN TERBIT</th>
                <th class="text-center">JUMLAH BUKU</th>
                <th class="text-center">DIPINJAM</th>
                <th class="text-center">HARGA PEMINJAMAN BUKU</th>
                <th colspan="3" class="text-center">AKSI</th>
            </tr>

            <?php
            $no = 1;
            foreach ($buku as $buku) :
            ?>

                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-center"><?php echo $buku->Id_Buku ?></td>
                    <td class="text-center"><?php echo $buku->Judul ?></td>
                    <td class="text-center"><?php echo $buku->Penulis ?></td>
                    <td class="text-center"><?php echo $buku->Penerbit ?></td>
                    <td class="text-center"><?php echo $buku->Tahun ?></td>
                    <td class="text-center"><?php echo $buku->Jumlah ?></td>
                    <td class="text-center"><?php echo $buku->Dipinjam ?></td>
                    <td class="text-center"><?php echo $buku->Harga ?></td>
                    <td class="text-center">
                        <div class="btn btn-success btn-sm "><i class="fas fa-search-plus"></i></div>
                    </td>
                    <td class="text-center"><?php echo anchor('admin/buku/edit/' . $buku->Id_Buku, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                    <td class="text-center"><?php echo anchor('admin/buku/hapus/' . $buku->Id_Buku, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

                </tr>

            <?php endforeach; ?>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambah_buku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA BUKU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'admin/buku/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode</label>
                            <input type="text" name="Id_Buku" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" name="Judul" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" name="Penulis" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" name="Penerbit" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="Tahun" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" name="Jumlah" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="Harga" class="form-control mb-2">
                        </div>

                        <div class="form-group">
                            <label>Gambar</label><br>
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