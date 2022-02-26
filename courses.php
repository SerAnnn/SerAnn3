<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>NARCO University</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon" />
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
</head>

<body id="page-top">
  <?php require "block/header.php" ?>

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4"> NARCO University Курсы </h1>
          <h2 class="h3">National Advanced Republic Community Of students</h2>


          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <!--/ text and babe end  /-->





  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a mt-5">НАПРАВЛЕНИЯ</h3>
            <h4>
              <p class="subtitle-a">
                8 востребованных направлений — выбирайте, в каком из них хотите развиваться. Еще у нас есть программы для школьников и целых компаний.
              </p>
            </h4>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?PHP
        for ($i = 0; $i <= 11; $i++) :
        ?>
          <div class="col-md-4">
            <a href="PHP.php">
              <div class="service-box">


                <div class="">
                  <img class="img-fluid " src="img/courses1/<?PHP echo ($i + 1) ?>.bmp" class="rounded " alt="..." />
                </div>


              </div>
            </a>
          </div>
        <?PHP endfor ?>
        <?PHP
        for ($i = 0; $i <= 11; $i++) :
        ?>
          <div class="col-md-4">
            <a href="unity.php">
              <div class="service-box">


                <div class="">
                  <img class="img-fluid " src="img/courses1/<?PHP echo ($i + 1) ?>.bmp" class="rounded " alt="..." />
                </div>


              </div>
            </a>
          </div>
        <?PHP endfor ?>



      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <!--/ Section Testimonials Star /-->
  <section id="about" class="about-mf sect-pt4 route" style="padding: 45px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <img src="img/babe 2.png" class="rounded float-end" style="padding: 4px; ">
        </div>
      </div>
    </div>
    </div>
  </section>
  </div>


  <!--/ button and png  Star /-->

  <section id="about" class="about-mf sect-pt2 route" style="padding: 45px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">Преимущества учебы
              в NARCO University </h3>

            <div class="line-mf"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-4  ">
                  <h1>Поддержка на всех этапах</h1>
                  <p style="padding-top: 30px; "> Наши специалисты помогут разобраться в программе, ответят на вопросы по домашним работам, решат любые технические сложности и проследят, чтобы вам было комфортно учиться.</p>
                </div>
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-7">
                      <h1>Преподаватели — практики</h1>
                      <p style="padding-top: 30px; margin-right: 50px;"> Вас будут учить эксперты из Mail.ru Group, Сбера, Альфа-банка, МегаФона, X5 Retail Group и других топовых компаний. Они поделятся опытом и техниками, которые каждый день помогают им в работе.</p>

                    </div>
                    <div class="col-md-5">
                      <img src="img/people .png" class="rounded float-end" alt="..." />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!--/ button and png  end /-->


  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">Сообшение</h5>
                  </div>
                  <?php require "form.php" ?>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left"></h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Facilis dolorum dolorem soluta quidem expedita aperiam
                      aliquid at. Totam magni ipsum suscipit amet? Autem nemo
                      esse laboriosam ratione nobis mollitia inventore?
                    </p>
                    <ul class="list-ico">
                      <li>
                        <span class="ion-ios-location"></span>
                        BUSTON
                      </li>
                      <li>
                        <span class="ion-ios-telephone"></span> +992 92 921 00
                        79
                      </li>
                      <li><span class="ion-email"></span> narco@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li>
                        <a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a>
                      </li>
                      <li>
                        <a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a>
                      </li>
                      <li>
                        <a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a>
                      </li>
                      <li>
                        <a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </section>
  <?php require "block/footer.php" ?>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>