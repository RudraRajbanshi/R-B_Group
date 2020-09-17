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
        <li class="active"><a href="{{ url('services') }}">Services</a></li>
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
          <h2>Services</h2>
          <ol>
            <li><a href="{{ url('/index') }}">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><strong>Our services</strong></h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="icofont-brush"></i></div>
              <h4 class="title"><a href="">Strata Cleaning</a></h4>
              <p class="description">Keeping your Strata fresh and clean, our team of experienced cleaners will vacuum
                over basic areas
                also tempered steel cleaning.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
              <h4 class="title"><a href="">Pest Control</a></h4>
              <p class="description">R&B Groups likewise offers pest control service for you in sensible expense.
                Thinking about you and
                your family, we use kid, pet and also plant friendly pest control chemicals for best outcomes.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-children-care"></i></div>
              <h4 class="title"><a href="">Childcare Cleaning</a></h4>
              <p class="description">Either be internal or external relocation, it creates stress for stuff packing,
                transport cleaning. Here R&B will bring down your stress by cleaning that premises expertly in
                reasonable price.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Some Extra <strong>Features</strong> we do provide</h2>
          <p>Some Features we do provide content </p>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>INDUSTRIAL CLEANING</h4>
                  <p>It is possible that you work either a commercial or industrial business, you will without a doubt
                    know
                    the value of standard cleaning service. Our cleaning team contrast the fundamental among those,
                    furthermore the significant of following Environmental Protection Standards. </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Medical Cleaning</h4>
                  <p>Hygiene is the most significant part in any medical region. Our accomplished team in medical field
                    gives you incredible cleaning service in hygiene-sensitive zones. Past this, our group focus strict
                    confidentiality agreement and operational conventions which guarantees our medical cleaning service
                    is profoundly controlled. </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Carpet Cleaning</h4>
                  <p>Steam cleaning is one of the best services provided by R&B Groups in sensible cost. Our steam clean
                    team clean your carpets to deepest taking all dirt as well strong stains out. As Recommended by
                    Standard Australia, we leave your carpet clean and fresh. </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>End of Lease Cleaning</h4>
                  <p>Either be internal or external relocation, it creates stress for stuff packing, transport and
                    vacant cleaning. Here R&B will bring down your stress by cleaning that premises expertly in
                    reasonable price. </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-5">
                  <h4>WareHouse Cleaning</h4>
                  <p>For hazard free workplace around WareHouse, Cleaning plays the vital role. The work which are
                    conducted inside a factory or warehouse has consistently shows the need of cleaning service from
                    time to time. For that, R&B Groups offers incredible assistance for cleaning. </p>
                </a>
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left" data-aos-delay="100">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="{{ asset('user/assets/img/30790.jpg') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="{{ asset('user/assets/img/medical.jpg') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="{{ asset('user/assets/img/carpet.jpg') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="{{ asset('user/assets/img/end.jpg') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-5">
                <figure>
                  <img src="{{ asset('user/assets/img/warehouse.jpg') }}" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


     @include('user.includes.contactform')


  </main><!-- End #main -->


    @include('user.includes.footer')
