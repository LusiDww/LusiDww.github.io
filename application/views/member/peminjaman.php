<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Peminjaman Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'dashboard_member/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Peminjaman Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
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

                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</main>