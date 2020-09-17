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
          <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ url('services') }}">Services</a></li>
        <li><a href="{{ url('blog') }}">Blog</a></li>
          <li class="drop-down"><a href="">Career</a>
            <ul>
            <li><a href="{{ url('aboutjob') }}"> ABOUT JOBS</a></li>
              <li><a href="{{ url('applyjob') }}">APPLY FOR JOBS</a>

            </ul>
          </li>
        <li class="active"><a href="{{ url('contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="{{ url('/index') }}">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3310.430631403997!2d151.1843212!3d-33.9300507!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b0fdfa636437%3A0x86a2095737fa3806!2s237%20O&#39;Riordan%20St%2C%20Mascot%20NSW%202020%2C%20Australia!5e0!3m2!1sen!2snp!4v1600359301662!5m2!1sen!2snp"
        frameborder="0" allowfullscreen></iframe>

    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>Australia <br>
                    237 O'Riordan St
                    Mascot NSW 2020
                  </p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+61432781426</p>
                </div>
              </div>
            </div>

          </div>

        </div>

         @include('user.includes.contactform')

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


 @include('user.includes.footer')
