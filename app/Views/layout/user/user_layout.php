<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image.png" href="img/favico.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/style.css">
    <script src="https://kit.fontawesome.com/330deea0aa.js" crossorigin="anonymous"></script>

    <title>Beranda</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#section1">SemuaBerita.com</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('/')?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('gallery')?>">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('news')?>">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('contactus')?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('liveUpdate')?>">Live Update</a>
                </li>
                <li class="nav-item">
                    <?php if (logged_in()) : ?>
                    <a class="nav-link js-scroll-trigger" 
                    href="<?= site_url('logout')?>"><i class="fa fa-user"></i> Logout</a>
                    <?php else : ?>
                         <a class="nav-link js-scroll-trigger" 
                    href="<?= site_url('admin/news')?>"><i class="fa fa-user"></i> Login</a>
                    <?php endif; ?>
                </li>
            </ul>
            </div>
        </div>
    </nav>





				<?= $this->renderSection('content')?>





			<footer class="page-footer font-small teal pt-4">
        <!-- Footer Text -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
              <li class="list-inline-item">
                <a class="btn-floating btn-ig mx-1" href="#">
                    <i class="fa-2x fab fa-instagram text-light"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-wa mx-1" href="#">
                    <i class="fa-2x fab fa-whatsapp text-light"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-wa mx-1" href="<?= site_url('login')?>">
                  <i class="fa-2x far fa-user text-light"></i>
                </a>
              </li>
            </ul>
            <!-- Social buttons -->
        
          </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-light">© 2022 Copyright:
          <a href="#"> semuaberita.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>