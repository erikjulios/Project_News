
<?= $this->extend('layout/user/user_layout')?>

<?= $this->section('content')?>
<!--Section: Contact v.2-->
<section class="mb-5">
    <hr>
    <h2 style="margin:6% 6% 3% 6%">Contact us</h2>
    <hr>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Apakah Anda memiliki pertanyaan? Jangan ragu untuk menghubungi kami secara langsung.<br> Tim kami akan kembali kepada Anda dalam hitungan jam untuk membantu Anda.</p>

    <div class="row justify-content-center align-items-center ">

        <!--Grid column-->
        <div class="col-md-5 mb-md-0 mb-5 ">
            <form id="contact-form " name="contact-form" action="<?= site_url('contactus')?>" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Nama</label>
                            <input type="text" id="name" name="nama" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" >Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subjek</label>
                            <input type="text" id="subject" name="subjek" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Pesan</label>
                            <textarea type="text" id="message" name="pesan" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                 <div class="text-center text-md-left">
                <input style="margin-top:10px" value="Send" class="btn btn-primary" type="submit" onclick="document.getElementById('contact-form').submit();">
            </div>

            </form>

           
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Jakarta, Indonesia</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 628 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>semuaberita@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
<?= $this->endSection()?>
