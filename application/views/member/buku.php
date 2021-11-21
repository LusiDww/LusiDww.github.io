<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'dashboard_member/index'; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
        <div class="row text-center">
            <?php foreach ($buku as $buku) : ?>
                <div class="card ml-3" style="width: 15rem; ">
                    <img src="<?php echo base_url() . 'assets/img/buku/' . $buku->Photo ?>" class="card-img-top mt-3" alt="">
                    <div class="card-body"><br>
                        <h5 class="card-subtitle mb-1"><?= $buku->Judul ?></h5>
                        <small>Penulis : <?= $buku->Penulis ?></small> <br>
                        <small>Jumlah buku : <?= $buku->Jumlah ?></small> <br>
                        <span class="badge badge-pill bg-success mb-3"><?= $buku->Harga ?></span>
                        <a href="<?php echo base_url() . 'buku/tampil'; ?>" class="btn btn-sm btn-primary">Pinjam</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

</main>