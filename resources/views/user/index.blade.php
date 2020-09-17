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
        <li class="active"><a href="{{ url('/index') }}">Home</a></li>
          <li><a href="{{ url('about') }}">About</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(user/assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>R&B Groups</span></h2>
              <p>A small business with a small team turned in a leading service provider in Cleaning business. At R&B we
                realise the need and expectations for more comprehensive and professional cleaning services. Serving
                since 2014, we are happy with the client's feedback and satisfaction and expect to serve with deference
                and trustworthiness. We believe in providing quality support and procure trust in market. Our core
                standards depends on consumer satisfaction and we accept their necessities as our commitments.</p>
              <div class="text-center"><a href="about.html" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(user/assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Our Vision</h2>
              <p>We have faith in human intelligence and genuineness at work. With everybody's entitlement to work and
                live in safe condition we are devoted to offer spotless and fulfilling service. We ensure the safety of
                our staff, customers and bolster relationship development. </p>
              <div class="text-center"><a href="about.html" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(user/assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Our Values</h2>
              <p>R&B respects and welcomes all creed of people ‘to or for’ service. We endeavor to act with uprightness
                towards our staff, our clients, the society and the surrounding. An obligation of care for our staff,
                clients and the nature. At R&B, we try to furnish the best quality involvement with respect to our
                cleaning and our client support.</p>
              <div class="text-center"><a href="about.html" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators">
          <li data-target="#heroCarousel" data-slide-to="0" class=""></li>
          <li data-target="#heroCarousel" data-slide-to="1" class=""></li>
          <li data-target="#heroCarousel" data-slide-to="2" class=""></li>
      </ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container">


        <div class="section-title" data-aos="fade-up">
          <h2>Check out <strong>our services</strong></h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="icofont-company"></i></div>
              <h5 class="title"><a href="">Commercial Cleaning</a></h5>
              <p class="description"> We offer you and your business required best business cleaning service and client
                care drew closer
                by you. For your business, on the off chance that you require cleaning service, at that point we can
                guarantee to give you best.

              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-ui-office"></i></div>
              <h4 class="title"><a href="">Office Cleaning</a></h4>
              <p class="description">Regardless of whether you maintain a huge business or little one, we
                will help keeping up
                your workplaces, guaranteeing to take your business in upper level. R&amp;B keep
                your interests as well demand in the lead position.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-restaurant"></i></div>
              <h4 class="title"><a href="">Pub Cleaning</a></h4>
              <p class="description">Hospitality Managers are the busiest individual to be at Hotels, Pubs, Bars and
                Night Clubs giving the
                cleaning service. Centring this, team will give the incredible help in the cleaning
                service with hassle-free environment.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    <!--======= start main=====-->


    @include('user.includes.contactform')

  </main><!-- End #main -->



  @include('user.includes.footer')
