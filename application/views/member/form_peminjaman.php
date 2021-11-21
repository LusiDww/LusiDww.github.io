<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Peminjaman Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'dashboard_member/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?= $this->session->flashdata('message'); ?>
    <form method="post" action="<?php echo base_url() . 'buku/form_peminjaman'; ?>">

        <div class="form group">
            <label>Nama lengkap</label>
            <input type="text" name="Nama" class="form-control">
        </div>

        <div class="form group">
            <label>NPM</label>
            <input type="text" name="NPM" class="form-control">
        </div>

        <div class="form group">
            <label>Program studi</label>
            <input type="text" name="Prodi" class="form-control">
        </div>

        <div class="form group">
            <label>Buku yang dipinjam</label>
            <input type="text" name="Buku" class="form-control">
        </div>

        <div class="form group">
            <label>Tanggal peminjaman</label>
            <input type="text" name="Tgl_Pinjam" class="form-control">
        </div>

        <div class="form group">
            <label>Jumlah buku yang dipinjam</label>
            <input type="text" name="Jumlah" class="form-control">
        </div>

        <div class="form group">
            <label>Harga peminjaman buku</label>
            <input type="text" name="Harga" class="form-control">
        </div>

        <button type="submit" class="btn btn-sm btn-success mt-3" href="<?php echo base_url('buku/tampil') ?>">Pinjam</button>
        <a href="<?php echo base_url('peminjaman') ?>" class="btn btn-sm btn-primary mt-3">Data Peminjaman Buku</a>
    </form>
    <div class="col-md-2"></div>

    </div>
    </div>