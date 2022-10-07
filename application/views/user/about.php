  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <!-- start Header --> 
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?= base_url('user/home'); ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Impact<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= base_url('user/home'); ?>">Home</a></li>
          <li><a href="<?= base_url('user/home/about'); ?>">About</a></li>
          <li><a href="<?= base_url('user/home/service'); ?>">Services</a></li>
          <li><a href="<?= base_url('user/home/portofolio'); ?>">Portfolio</a></li>
          <li><a href="<?= base_url('user/home/team'); ?>">Team</a></li>
          <li><a href="<?= base_url('user/home/blog'); ?>">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('user/home/contact'); ?>">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header --> 

  <!-- start main --> 
  <section id="about" class="about">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Voluptatem dignissimos provident quasi corporis</h3>
            <img src="ft_assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="ft_assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  <!-- end main --> 
  <section id="clients" class="clients">
      <div class="container aos-init aos-animate" data-aos="zoom-out">

        <div class="clients-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
          <div class="swiper-wrapper align-items-center" id="swiper-wrapper-372d7f1037545b6ce" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2134px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-6.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-7.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-1.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-2.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 114px; margin-right: 80px;"><img src="ft_assets/img/clients/client-4.png" class="img-fluid" alt=""></div></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>
    </section>


    <section id="stats-counter" class="stats-counter">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="ft_assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" class="purecounter">232</span>
              <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0" class="purecounter">521</span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="0" class="purecounter">453</span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section>


    <section id="call-to-action" class="call-to-action">
      <div class="container text-center aos-init aos-animate" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section>