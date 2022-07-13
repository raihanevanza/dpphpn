<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HeroBiz Bootstrap Template - Home 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="../assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="../assets/css/main-v2.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="news-page">

  <!-- ======= Header ======= -->
  <?php include 'nav.php' ?>
  <!-- End Header -->

  <main id="main-wrapper">

   <!-- ======= Features Section ======= -->
   <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">
          <li class="col-2">
            <div class="tab active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <div class="tab-title">Akademik</div>
            </div>
          </li><!-- End Tab 1 Nav -->

          <li class="col-2">
            <div class="tab" data-bs-toggle="tab" data-bs-target="#tab-2">
              <div class="tab-title">Kemanusiaan</div>
            </div>
          </li><!-- End Tab 2 Nav -->

          <li class="col-2">
            <div class="tab" data-bs-toggle="tab" data-bs-target="#tab-3">
              <div class="tab-title">Olahraga</div>
            </div>
          </li><!-- End Tab 3 Nav -->

          <li class="col-2">
            <div class="tab" data-bs-toggle="tab" data-bs-target="#tab-4">
              <div class="tab-title">Politik</div>
            </div>
          </li><!-- End Tab 4 Nav -->

          <li class="col-2">
            <div class="tab" data-bs-toggle="tab" data-bs-target="#tab-5">
              <div class="tab-title">Music</div>
            </div>
          </li><!-- End Tab 5 Nav -->
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row recent-blog-posts" id="recent-blog-posts">
                <?php
                    $arr = array (
                        '1' => array(
                            'image' => 'blog-1.jpg',
                            'date' 	=> 'Tue, December 12',
                            'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                            'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                        ),
                        '2' => array(
                            'image' => 'blog-1.jpg',
                            'date' 	=> 'Tue, December 12',
                            'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                            'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                        ),
                        '3' => array(
                            'image' => 'blog-1.jpg',
                            'date' 	=> 'Tue, December 12',
                            'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                            'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                        ),
                        '4' => array(
                            'image' => 'blog-1.jpg',
                            'date' 	=> 'Tue, December 12',
                            'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                            'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                        ),
                    );
                        foreach ($arr as $key => $value) {
                ?>
                    <div class="col-lg-4 news-content" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="../assets/img/blog/<?= $value['image'] ?>" class="img-fluid" alt=""></div>
                            <div class="meta">
                            <span class="post-date"><?= $value['date'] ?></span>
                            </div>
                            <h3 class="post-title"><?= $value['title'] ?></h3>
                            <p><?= $value['content'] ?></p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div><!-- End Tab Content 1 -->

            <div class="tab-pane" id="tab-2">
                <div class="row recent-blog-posts" id="recent-blog-posts">
                    <?php
                        $arr = array (
                            '1' => array(
                                'image' => 'blog-2.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '2' => array(
                                'image' => 'blog-2.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '3' => array(
                                'image' => 'blog-2.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '4' => array(
                                'image' => 'blog-2.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                        );
                            foreach ($arr as $key => $value) {
                    ?>
                    <div class="col-lg-4 news-content" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="../assets/img/blog/<?= $value['image'] ?>" class="img-fluid" alt=""></div>
                            <div class="meta">
                            <span class="post-date"><?= $value['date'] ?></span>
                            </div>
                            <h3 class="post-title"><?= $value['title'] ?></h3>
                            <p><?= $value['content'] ?></p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div><!-- End Tab Content 2 -->

            <div class="tab-pane" id="tab-3">
                <div class="row recent-blog-posts" id="recent-blog-posts">
                    <?php
                        $arr = array (
                            '1' => array(
                                'image' => 'blog-3.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '2' => array(
                                'image' => 'blog-3.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '3' => array(
                                'image' => 'blog-3.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '4' => array(
                                'image' => 'blog-3.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                        );
                            foreach ($arr as $key => $value) {
                    ?>
                    <div class="col-lg-4 news-content" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="../assets/img/blog/<?= $value['image'] ?>" class="img-fluid" alt=""></div>
                            <div class="meta">
                            <span class="post-date"><?= $value['date'] ?></span>
                            </div>
                            <h3 class="post-title"><?= $value['title'] ?></h3>
                            <p><?= $value['content'] ?></p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div><!-- End Tab Content 3 -->

            <div class="tab-pane" id="tab-4">
                <div class="row recent-blog-posts" id="recent-blog-posts">
                    <?php
                        $arr = array (
                            '1' => array(
                                'image' => 'blog-4.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '2' => array(
                                'image' => 'blog-4.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '3' => array(
                                'image' => 'blog-4.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '4' => array(
                                'image' => 'blog-4.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                        );
                            foreach ($arr as $key => $value) {
                    ?>
                    <div class="col-lg-4 news-content" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="../assets/img/blog/<?= $value['image'] ?>" class="img-fluid" alt=""></div>
                            <div class="meta">
                            <span class="post-date"><?= $value['date'] ?></span>
                            </div>
                            <h3 class="post-title"><?= $value['title'] ?></h3>
                            <p><?= $value['content'] ?></p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div><!-- End Tab Content 4 -->

            <div class="tab-pane" id="tab-5">
                <div class="row recent-blog-posts" id="recent-blog-posts">
                    <?php
                        $arr = array (
                            '1' => array(
                                'image' => 'blog-5.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '2' => array(
                                'image' => 'blog-5.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '3' => array(
                                'image' => 'blog-5.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                            '4' => array(
                                'image' => 'blog-5.jpg',
                                'date' 	=> 'Tue, December 12',
                                'title'	=> 'Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit',
                                'content'	=> 'Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...'
                            ),
                        );
                            foreach ($arr as $key => $value) {
                    ?>
                    <div class="col-lg-4 news-content" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="../assets/img/blog/<?= $value['image'] ?>" class="img-fluid" alt=""></div>
                            <div class="meta">
                            <span class="post-date"><?= $value['date'] ?></span>
                            </div>
                            <h3 class="post-title"><?= $value['title'] ?></h3>
                            <p><?= $value['content'] ?></p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div><!-- End Tab Content 5 -->
          </div>
      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php' ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>