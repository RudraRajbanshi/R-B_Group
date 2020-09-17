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
        <li class="active"><a href="{{ url('blog') }}">Blog</a></li>
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
          <h2>Blog</h2>
          <ol>
            <li><a href="{{ url('/index') }}">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
                <img src="{{ asset('user/assets/img/blog-1.jpg') }}" alt="" class="img-fluid" id="RUI">
              </div>

              <h2 class="entry-title">
                <a>RUI LI</a>
                <h3>DIRECTOR</h3>

              </h2>


              <div class="entry-content">
                <p>
                  Services and hospitality is our skill. Since 2014 R&B GROUPS, is growing its services all over NSW.
                  Acing in cleaning services, with the props we have, I realize we can transform into something
                  significant, something with a bigger scope of administrations. The R&B GROUPS family is more dedicated
                  towards constant services and with the specialists and manpower we hold, I can ensure full customer
                  fulfilment.<br /><br>
                  As a founder of this company, my dreams are obvious to see R&B grow the scope and services of cleaning
                  in different parts of Australia and deliver satisfaction. I am a proud member of this company and I
                  mean to keep it sparkling in the future market. We have merged digitalization and innovation in this
                  administration market to improve effectiveness and convey quality. I guarantee you; business with us
                  will feel like a business in the family. R&B Groups is more than just cleaning, it’s smart and
                  satisfying cleaning. Our cleaners are well experienced, very professional and intend to do the job at
                  best. Thank you for choosing us as your service provider, we assure you the best cleaning.

                </p>

              </div>

            </article><!-- End blog entry -->

            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
                <img src="{{ asset('user/assets/img/blog-2.jpg') }}" alt="" class="img-fluid" id="NITESH">
              </div>

              <h2 class="entry-title">
                <a>NITESH PANDEY </a>
                <h3>MANAGER </h3>

              </h2>


              <div class="entry-content">
                <p>
                  I was an area supervisor for a cleaning company when our very known Director of R&B, Mr Li brought the
                  idea of starting own company mixing the old persevering methods and current innovation. To be
                  completely forthright, it was an extreme choice for me to make, I had good procuring, I had a family
                  dependent on me, there were risks if we will get enough contracts in this competitive market. In any
                  case, somewhere inside I knew the idea was extraordinary, and with the correct team, we can make this
                  company sparkle in the cleaning field. We worked, and worked, and worked and worked, on each and every
                  progression of the company’s advancement. We analysed the market, did our risk assessments, finally
                  started in the market with just 5 cleaners. I believed in the idea, and when we conveyed it to our
                  clients they showed interest too, and now we are driving the cleaning market with most elevated
                  customer fulfilment. <br /><br>

                  As a company manager, I deal with client contracts, also deal with their issues at the management
                  level. My duties are more of managing the resources, regulating funds in necessary areas, determining
                  clients issue and resolving them. They say, ‘I am one of two shoulders of this company’, however, I
                  believe, I am only one little part where each piece is similarly answerable for higher productivity.
                  <br /><br>

                  With R&B, my journey has been extraordinary, we have presented numerous innovations in the cleaning
                  business. For instance, geolocation signs in and sign off the framework, live talk among customers and
                  the executives about any on or off-site issue, digitalization in reports, and so on. I am happy with
                  what we have accomplished, however, this just not yet satisfies me. I have a lot of expectations with
                  R&B in future.

                </p>

              </div>

            </article><!-- End blog entry -->


            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
                <img src="{{ asset('user/assets/img/blog-4.jpg') }}" alt="" class="img-fluid" id="KAPIL">
              </div>

              <h2 class="entry-title">
                <a>KAPIL GHIMIRE
                </a>
                <h3> Regional Supervisor </h3>

              </h2>



              <div class="entry-content">
                <p>
                  It gives me immense pleasure to be a part of such astounding service provider. As a Regional head my
                  prime duties incorporates dealing with the manpower and assets for all the administrations R&B Groups
                  takes care of. I believe, we develop as a family more adequately than as a person. So I am more
                  decided towards keeping it together and meeting the discerning needs of both team and clients. I am
                  additionally answerable for the transparency among company and clients. My involvement in R&B has been
                  incredible, presently I look after 150 cleaners in various cleaning segments all over NSW. Company
                  perceives my recommendations and amend things when required, which is the reason our customers are
                  rarely unsatisfied. We accept their requests as our obligation. <br /><br>

                  Being a regional head isn't easy, when the duty of team selection is on your shoulders. I am proud of
                  my group, the manner in which they get chosen, the procedure of resume shortlisting, interviews, it's
                  very professional and inventive. The core team of R&B is ace at it works which makes my activity
                  genuinely simple. At R&B, I certainly enjoy everything about my job and I am eager to see whats for
                  the future at R&B Groups. I would like to assure you that we are a team of highly skilled
                  professionals and we enjoy our jobs here.

                </p>


            </article><!-- End blog entry -->


            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
                <img src="{{ asset('user/assets/img/blog-3.jpg') }}" alt="" class="img-fluid" id="AMIT">
              </div>

              <h2 class="entry-title">
                </a>
                <a>AMIT DHAKAL
                </a>

                <h3>SITE SUPERVISOR </h3>
              </h2>



              <div class="entry-content">
                <p>
                  I remember the first time I was told that I have to talk about my working experience at R&B for the
                  website. I was thrilled because I always wanted people to know how much I appreciate working here.
                  Trust me when I say, that working here with R&B group resembles working in a family, we share both
                  delight and issues. We battle difficult stretches together, we commend accomplishments together.
                  <br /><br>
                  I work closely with both cleaners and management team. I am more like a bridge of information
                  exchange, action implementation and idea share. Working intimately with cleaners permits me to know
                  their circumstance and work progress whereas with management team helps me to know customer's
                  recognition of cleaners. My essential duties include overseeing cleaners, communicating with
                  customers, fathoming nearby issues, overseeing leaves and hours, and so on. I work at the base level
                  so it is significant for me to be accessible when fundamental.<br />
                  <br>
                  With R&B, I have learnt a lot about cleaning business and management system. They taught me, with
                  better quality you can drive the market. The only thing that matters most is customer satisfaction,
                  and that’s what I am liable for at R&B. I see my future bright and secured with R&B Groups. Thank you
                  for having me and I assure you, I will leave no stone unturned to keep the name and fame of this
                  company.

                </p>

              </div>

            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#RUI">DIRECTOR <span></span></a></li>
                  <li><a href="#NITESH">MANAGER <span></span></a></li>
                  <li><a href="#KAPIL">REGIONAL SUPERVISOR<span></span></a></li>
                  <li><a href="#AMIT">SITE SUPERVISOR <span></span></a></li>

                </ul>

              </div><!-- End sidebar categories-->


            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


  @include('user.includes.footer')
