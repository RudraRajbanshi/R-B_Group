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
          <li class="active drop-down"><a href="">Career</a>
            <ul>
            <li class="active"><a href="{{ url('aboutjob') }}"> ABOUT JOBS</a></li>
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
                    <h2>Career</h2>
                    <ol>
                        <li><a href="{{ url('/index') }}">Home</a></li>
                        <li>About Jobs</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->


        <section id="about-us" class="about-us">
            <div class="container">

                <div class="row no-gutters">
                    <div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-left">
                        <img src="{{ asset('user/assets/img/30791.jpg') }}" alt="" srcset="" style="width: 450px;">
                    </div>
                    <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up">About Jobs</h3>
                            <p data-aos="fade-up">
                                At R&amp;B we esteem and value our employees for their hard work for the
                                organization and devotion towards our customers satisfaction. Through a
                                proper selection process we make sure to build a strong capable team for
                                particular jobs with a sustainable mindset. When the team is set, we empower
                                them for good work, we train them for each circumstance, we ensure their
                                wellbeing, we cause them to feel in family. Moreover, we consider offering
                                benefits to our employees, we provide them financial assistance for urgency,
                                most of all we make them feel valued. <br><br>
                                It&#39;s stated, &quot;Each and every brick is equally liable for the quality of entire
                                structure.&quot; And we are a genuine believer of this. We keep our channels open
                                to any thoughts, proposals or issues whenever of the day. We have been
                                successful as a group since we have confidence in our employees.
                                We welcome and respect our employees form any creed or geography who
                                are lawfully remaining in Australia. We encourage our staffs to work as a
                                team, as a family having each other’s back and taking their responsibilities
                                seriously. We make sure at very core level that there is no place for
                                discrimination, harassment and provocation, we have strict policies against it.
                                Unity in diversity, is the best proclamation for the manner in which they work
                                around. We interview our candidates one on one and make sure everyone is
                                dedicated to one goal of quality service. Moreover, we do organise fun
                                exercises like games, BBQ, Picnic, trip, and so on schedule and again to
                                commend achievement and keep family together. We organise charity to the
                                need ones as a family. <br><br>
                                We train, guide and support our employees for extra skill or reshaping their
                                existing skill accordance to customer’s necessity. We provide them with tons
                                of opportunity to move forward adjacent to new technology and meanwhile we
                                also motivate them for skill development. R&amp;B team assists you throughout
                                the process of personal and personality development. We assist our
                                employees in all manners needed from the very start. We ensure they take
                                safety measures and avoid accidents or damages. We expect our staffs to feel
                                like a family and work together for career enhancement.


                            </p>

                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

         @include('user.includes.contactform')


    </main><!-- End #main -->

 @include('user.includes.footer')
