<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Pengembalian Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'dashboard_member/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Pengembalian Buku</li>
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
                <th class="text-center">TANGGAL PENGEMBALIAN BUKU</th>
                <th class="text-center">JUMLAH BUKU</th>
            </tr>

            <?php
            $no = 1;
            foreach ($pengembalian as $pengembalian) :
            ?>

                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-center"><?php echo $pengembalian->Id_Pengembalian ?></td>
                    <td class="text-center"><?php echo $pengembalian->Nama ?></td>
                    <td class="text-center"><?php echo $pengembalian->NPM ?></td>
                    <td class="text-center"><?php echo $pengembalian->Prodi ?></td>
                    <td class="text-center"><?php echo $pengembalian->Buku ?></td>
                    <td class="text-center"><?php echo $pengembalian->Tgl_Peminjaman ?></td>
                    <td class="text-center"><?php echo $pengembalian->Tgl_Pengembalian ?></td>
                    <td class="text-center"><?php echo $pengembalian->Jumlah ?></td>

                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</main>