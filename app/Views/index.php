<?= $this->extend('layout/user/user_layout')?>

<?= $this->section('content')?>
    <div class="row" id="section1">
        <div class="col-lg-12 mb-5">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <img src="img/g1.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4">Berita terkini <br> <span class="font-weight-bold">Berbagai jenis berita menarik di tanah air</span></h1>
                        <a class="btn btn-dark btn-lg" role="button" href="#section2">LANJUTKAN</a>
                    </div>
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="img/g2.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="img/g3.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="img/g4.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="img/g5.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="img/g6.JPG" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container" id="section2">
      <div class="row">
        <div class="col-md-4 mb-5">
          <div class="card">
            <img class="card-img-top" src="img/g7.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Situasi Ibukota</h5>
              <p class="card-text">Demo di ibukota berlangsung dengan kericuhan</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card">
            <img class="card-img-top" src="img/g8.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Keramaian di masa pandemi</h5>
              <p class="card-text">Ramainya antrian vaksin membuat petugas bingung mengatur protokol kesehatan</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card">
            <img class="card-img-top" src="img/g9.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Perbuatan tidak terpuji</h5>
              <p class="card-text">Perbuatan karyawan ini tidak pantas ditiru!  </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?= site_url('news')?>" class="btn btn-primary">SELENGKAPNYA</a>
      </div>
    </div>
    <br><br>
<?= $this->endSection()?>