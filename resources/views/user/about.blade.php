@include('user.includes.header')
 <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="index.html">R&B Groups</a></h1> -->
        <a href="{{ url('/index') }}"><img src="{{ asset('user/assets/img/logo.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li><a href="{{ url('/index') }}">Home</a></li>
          <li class="active"><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ url('services') }}">Services</a></li>
        <li><a href="{{ url('blog') }}">Blog</a></li>
          <li class="drop-down"><a href="">Career</a>
            <ul>
            <li><a href="{{ url('aboutjob') }}"> ABOUT JOBS</a></li>
              <li><a href="{{ url('applyjob') }}">APPLY FOR JOBS</a>

            </ul>
          </li>
        <li><a href="{{ url('contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="{{ url('/index') }}">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
            data-aos="fade-right"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up">About Company</h3>
              <p data-aos="fade-up">
                A small business with a small team turned in a leading service provider in Cleaning business. At R&B we
                realise the need and expectations for more comprehensive and professional cleaning services. Serving
                since 2014, we are happy with the client's feedback and satisfaction and expect to serve with deference
                and trustworthiness. We believe in providing quality support and procure trust in market. Our core
                standards depends on consumer satisfaction and we accept their necessities as our commitments.

                R&B Groups isn't just about some cleaning business rather about structure, trust, making connections,
                delivering satisfaction. We accept every one of our customers as family and we plan to keep our family
                content.

              </p>
              <!-- <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4</h4>
                  <p>content about service</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>service</h4>
                  <p>content about service</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>service</h4>
                  <p>content about service</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>service</h4>
                  <p>content about service</p>
                </div>
              </div> -->
            </div> <!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <section id="about-us" class="about-us">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
            data-aos="fade-left"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up">Our Mission</h3>
              <p data-aos="fade-up">
                As a cleaning business we are resolved to offer a quality assistance surpassing customer's desires. We
                expect to make a pleasant and smooth condition at work. We are glad to be decided on our performance
                which will keep us to be at our best. We appreciate constant reporting for any sort of requirements or
                issues when it comes about assistance. We additionally esteem the human perspective in administration,
                and comprehend the difficulties to keep up consistent quality in dynamic condition. This is the reason
                we empower straightforwardness and simple correspondence to trade necessities and ideas with customers.
                Our approach promotes zero damage and injury free condition.


              </p>

            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2> <strong>Our Team</strong></h2>
          <p>About the Team members some content </p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{ asset('user/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-telegram"></i></a>
                  <a href=""><i class="icofont-email"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>RUI LI</h4>
                <span>DIRECTOR</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('user/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-telegram"></i></a>
                  <a href=""><i class="icofont-email"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>NITESH PANDEY</h4>
                <span>MANAGER</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('user/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-telegram"></i></a>
                  <a href=""><i class="icofont-email"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>KAPIL GHIMIRE</h4>
                <span>REGIONAL SUPERVISOR</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('user/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-telegram"></i></a>
                  <a href=""><i class="icofont-email"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>AMIT DHAKAL</h4>
                <span>SITE SUPERVISOR</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Team Section -->

     @include('user.includes.contactform')

  </main><!-- End #main -->



  @include('user.includes.footer')
