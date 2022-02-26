<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Пользователь</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


<body>

  <!-- Main Stylesheet File -->
  <?php require "block/header.php" ?>


  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->

          <?php if (isset($_SESSION['username'])) : ?>
            <h1 class="intro-title mb-4"><strong><?php echo $_SESSION['username']; ?></strong> is part of NARCO University</h1>
          <?php endif ?>

          <h3 class="h3">National Advanced Republic Community Of students</h3>

          <p class="intro-subtitle">
            <span class="text-slider-items">CEO DevFolio,Web Developer,Web Designer,Frontend
              Developer,Graphic Designer</span><strong class="text-slider"></strong>
          </p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="post-box">
            <h1 class="article-title">Курс языка программирование PHP</h1>

            <video width="560" height="315" controls poster="img/practicum.gif">
              <!--/  <source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'> /  -->
              <source src="video/1.mp4">
              <!--/  <source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'>  / -->
              Тег video не поддерживается вашим браузером. <a href="video/1.mp4">Скачайте видео</a>.
            </video>


            <div class="post-meta">
              <h1 class="article-title">Типы данных в PHP </h1>
              <ul>
                <li>
                  <span class="ion-ios-person"></span>
                  <?php if (isset($_SESSION['username'])) : ?>
                    <a href="#"><strong><?php echo $_SESSION['username']; ?></strong> </a>
                  <?php endif ?>

                </li>

              </ul>
            </div>
            <div class="article-content">
              <p>
                <br>
              <h5> Немного о PHP</h5> Что такое PHP? Язык программирования. <br> <br>
              <h6>Что такое скрипт (программа)?</h6> Это текст, в котором записана
              последовательность команд. Программист пишет скрипт, а интерпретатор
              PHP читает написанный скрипт и выполняет записанные в нем команды (собственно потому
              он и называется интерпретатором). Иногда текст скрипта называют код. Что может делать
              скрипт? Да все, что угодно. Профит!
              </p>
              <p>
              <h6>Каким образом пишется программа?</h6> Любым, который нравится программисту. Так как код
              - это обычный текст, то можно использовать даже блокнот, однако делать так не стоит.
              Лучше скачать продвинутый редактор вроде Notepad++ для Windows (бесплатно) или Sublime
              Text (платно). Если тебе нужно еще больше возможностей, можно взять IDE (среду разработки),
              например Netbeans PHP (бесплатно) или PHPStorm (платно). Продвинутые редакторы подсвечивают
              код разными цветами, поддерживают автодополнение и содержат много других полезных функций.
              Для первых уроков хватит сайта ideone.com, но далее стоит скачать и освоить хотя бы Notepad++. <br>

              </p>
              <p>
                Итак, заходи на сайт http://ideone.com/ . Там ты можешь набрать свой скрипт, нажать кнопку,
                и увидеть результат его работы. То, что ты туда вводишь, отправляется на их сервер, интерпретатор
                PHP исполняет этот код, а тебе выводится результат.
              </p>
              <h5>Первая программа</h5>
              <p>
                Давай не будем откладывать пpактику в долгий ящик, и сделаем задание:
              </p>
              <blockquote class="blockquote">
                <p class="mb-0"></p>
              </blockquote>

            </div>
          </div>
          <div class="box-comments">
            <div class="title-box-2">
              <h4 class="title-comments title-left"> Комментарий </h4>
            </div>
            <ul class="list-comments">
              <li>
                <div class="comment-avatar">
                  <img src="img/testimonial-2.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Андрей </h4>
                  <span>18 Apr 2021</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li>
                <div class="comment-avatar">
                  <img src="img/testimonial-4.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Carmen Vegas</h4>
                  <span>18 Apr 2021</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis,
                    veritatis deserunt.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li class="comment-children">
                <div class="comment-avatar">
                  <img src="img/testimonial-2.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Oliver Colmenares</h4>
                  <span>18 Apr 2021</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>

            </ul>
          </div>
          <div class="form-comments">
            <div class="title-box-2">
              <h3 class="title-left">
                Отправить на проверку
              </h3>
            </div>
            <form class="form-mf">
              <div class="row">

                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <textarea id="textMessage" class="form-control input-mf" placeholder="           <div class=" widget-sidebar">
            <h5 class="sidebar-title">Программа </h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">Введение в программирование.</a>
                </li>
            </div>
          </div> " name="message" cols="45" rows="8" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="widget-sidebar sidebar-search">
            <h5 class="sidebar-title">Пользователь </h5>
            <div class="sidebar-content">
              <div class="row">
                <div class="col-sm-6 col-md-5">
                  <div class="about-img">
                    <img src="img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="" />
                  </div>
                </div>
                <div class="col-sm-8 col-md-9">
                  <div class="about-info">
                    <p>
                      <span class="title-s">Name: </span>
                      <?php if (isset($_SESSION['username'])) : ?>
                        <span><strong><?php echo $_SESSION['username']; ?></strong> </span>
                      <?php endif ?>

                    </p>
                    <p>
                      <span class="title-s"> City : </span>
                      <span> BUSTON</span>
                    </p>
                    <p>
                      <span class="title-s">Emais: </span>
                      <span>narco@gmail.com</span>
                    </p>
                    <p>
                      <span class="title-s">Phone: </span>
                      <span>92 921 00 79</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Программа </h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">Введение в программирование.</a>
                </li>
                <li>
                  <a href="#">Структура управления данными</a>
                </li>
                <li>
                  <a href="#">Протокол HTTP/HTTPS.</a>
                </li>
                <li>
                  <a href="#">Пользовательские функции</a>
                </li>
                <li>
                  <a href="#">Cookie/Session.</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  <!--/ Section Contact-Footer Star /-->

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