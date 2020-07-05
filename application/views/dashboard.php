<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url() . "/assets/img/slider/slider1.jpg" ?>" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() . "/assets/img/slider/slider2.jpg" ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() . "/assets/img/slider/slider3.jpg" ?>" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <h3 class="text-center mt-3 font-weight-bold">KATEGORI</h3>
    <hr class="hr-orange">
    <div class="row">
        <div class="col-6 col-lg-6 col-sm-12 mb-4 mx-auto text-center">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?= base_url() . "assets/img/produk/kue1.jpg" ?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mt-3 font-weight-bold">
                        <?php echo anchor('kategori/kue', 'KUE'); ?></h4>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 mb-4 text-center">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?= base_url() . "assets/img/produk/kue1.jpg" ?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mt-3 font-weight-bold"><?php echo anchor('kategori/kue', 'KUE'); ?>
                    </h4>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="text-center font-weight-bold">SEMUA PRODUK</h3>
    <hr class="hr-orange">
    <div class="row">
        <?php foreach ($barang as $brg) : ?>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?= base_url() . "assets/img/produk/kue1.jpg" ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-uppercase"><?= $brg->nama_brg ?></h5>
                    <p class="card-text">Rp. <?= number_format($brg->harga, 0, ',', '.') ?></p>
                    <div>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-primary btn-sm">Tambah Ke Keranjang</div>') ?>
                    </div>
                    <div class="mt-1">
                        <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-success btn-sm">Detail</div>') ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>