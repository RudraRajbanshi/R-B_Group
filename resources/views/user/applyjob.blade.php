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
            <li><a href="{{ url('aboutjob') }}"> ABOUT JOBS</a></li>
              <li class="active"><a href="{{ url('applyjob') }}">APPLY FOR JOBS</a>

            </ul>
          </li>
        <li><a href="{{ url('contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


 <main id="main" class="team section-bg">

        <!-- ======= Breadcrumbs ======= -->
        <section id="contact" class="contact">
            <div class="container">
                 @if(\Session::has('msg'))
          <div class = 'alert alert-success'>
            <p>{{ \Session::get('msg') }}</p>
          </div></br>
          @endif
          @if($errors->any())
          <div class = 'alert alert-danger'>
            <ul>
              @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
              @endforeach
            </ul>
          </div>
          @endif
                <div class="php-email-form">
                    <form class="applyjob" action="{{ url('/applyjob') }}" method="POST" enctype="multipart/form-data">
                        <h3>Applicant Details Form </h3>
                        <p>Note: * required</p>

                        <br />

                        <div class="form-row">

                            <div class="col-md-3 mb-3">
                                <label for="validationDefault02">Given Name *</label>
                                <input type="text" class="form-control" name="name" required value="{{ old('name') }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Middle Name</label>
                                <input type="text" class="form-control" name="middlename" value="{{ old('middlename') }}">

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Surname *</label>
                                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault04">Gender *</label>
                                <select class="custom-select" name="gender" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="male" @if(old('gender') == 'male') selected @endif>Male</option>
                                    <option value="female" @if(old('gender') == 'female') selected @endif>Female</option>
                                    <option value="hidden" @if(old('gender') == 'hidden') selected @endif>Prefer not to Say</option>

                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Date of Birth *</label>
                            <input type="date" max="{{ date('Y-m-d') }}" class="form-control" id="dob" name="dob" value="{{ old('dob') }}" required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Place of Birth *</label>
                                <input type="text" class="form-control" name="birthplace" value="{{ old('birthplace') }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault02">Suburb</label>
                                <input type="text" class="form-control" name="suburb" value="{{ old('suburb') }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">State</label>
                                <input type="text" class="form-control" name="state" value="{{ old('state') }}">

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Country *</label>
                                <input type="text" class="form-control" name="country" value="{{ old('country') }}" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Street</label>
                                <input type="text" class="form-control" name="street" value="{{ old('street') }}">

                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05"> Current Suburb *</label>
                                <input type="text" class="form-control" name="currentsuburb" value="{{ old('currentsuburb') }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Current State *</label>
                                <input type="text" class="form-control" name="currentstate" value="{{ old('currentstate') }}" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Postcode *</label>
                                <input type="text" class="form-control" name="postcode" value="{{ old('postcode') }}" required>

                            </div>
                            <!-- <div class="col-md-4 mb-3">
                            <label for="validationDefault01">Country</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div> -->
                        </div>
                        <!-- Contact details -->
                        <h3>Contact Details </h3>
                        <br />
                        <br />
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Phone *</label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                            </div>

                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Email Address *</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <!-- Document Details -->
                        <h3>Document (optional)</h3>
                        <br />
                        <br />
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Aust. Driver’s Licence No</label>
                                <input type="text" class="form-control" name="driver_licence_no" value="{{ old('driver_licence_no') }}">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">State/Territory</label>
                                <input type="text" class="form-control" name="driver_state_territory" value="{{ old('driver_state_territory') }}">

                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Firearms Licence No</label>
                                <input type="text" class="form-control" name="firearms_licence_no"  value="{{ old('firearms_licence_no') }}">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">State/Territory</label>
                                <input type="text" class="form-control" name="firearms_state_territorys" value="{{ old('firearms_state_territorys') }}">


                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Passport No *</label>
                                <input type="text" class="form-control" name="passport_no"  value="{{ old('passport_no') }}" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Passport Country *</label>
                                <input type="text" class="form-control" name="passport_country" value="{{ old('passport_country') }}" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <h3>Visa Details</h3>
                        <br>
                        <br>
                        <div class="form-row">

                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Visa type *</label>
                                <input type="text" class="form-control" name="visatype" value="{{ old('visatype') }}" required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Visa Issued Date *</label>
                                <input type="date" max="{{ date('Y-m-d') }}" class="form-control" name="visaIssued" value="{{ old('visaIssued') }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Visa Expiry Date *</label>
                                <input type="date" min="{{ date('Y-m-d') }}" class="form-control" name="visaExpiry" value="{{ old('visaExpiry') }}" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault04">Work Permit *</label>
                                <select class="custom-select" name="workPermit" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="part time" @if(old('workPermit') == 'part time') selected @endif>Part Time</option>
                                    <option value="full time" @if(old('workPermit') == 'full time') selected @endif>Full Time

                                    </option>
                                </select>
                            </div>
                        </div>
                        <!-- Table  -->
                        <br>
                        <div class="form-row" id="test-color">
                            <br>
                            <h3>Please Fill You Availability Below *</h3>
                            <br>
                            <br>
                            <table class="table " id="days" required>
                                <!-- Table head -->
                                <thead>
                                    <tr>
                                        <th>Days</th>
                                        <th>Morning</th>
                                        <th>Afternoon</th>
                                        <th>Evening</th>
                                    </tr>
                                </thead>

                                <tr>
                                    <th>Monday</th>
                                    <th> <input type="radio" value="morning" name="monday" @if(old('monday') == 'morning') checked @endif/> </th>
                                    <th> <input type="radio" value="afternoon" name="monday" @if(old('monday') == 'afternoon') checked @endif/> </th>
                                    <th> <input type="radio" value="evening" name="monday" @if(old('monday') == 'evening') checked @endif/> </th>

                                </tr>
                                <tr>
                                    <th>Tuesday</th>
                                    <th> <input type="radio" value="morning" name="tuesday" @if(old('tuesday') == 'morning') checked @endif/> </th>
                                    <th> <input type="radio" value="afternoon" name="tuesday" @if(old('tuesday') == 'afternoon') checked @endif/> </th>
                                    <th> <input type="radio" value="evening" name="tuesday" @if(old('tuesday') == 'evening') checked @endif/> </th>

                                </tr>
                                <tr>
                                    <th>Wednesday</th>
                                    <th> <input type="radio" value="morning" name="wednesday" @if(old('wednesday') == 'morning') checked @endif/> </th>
                                    <th> <input type="radio" value="afternoon" name="wednesday" @if(old('wednesday') == 'afternoon') checked @endif/> </th>
                                    <th> <input type="radio" value="evening" name="wednesday" @if(old('wednesday') == 'evening') checked @endif/> </th>

                                </tr>
                                <tr>
                                    <th>Thursday</th>
                                    <th> <input type="radio" value="morning" name="thursday" @if(old('thursday') == 'morning') checked @endif/> </th>
                                    <th> <input type="radio" value="afternoon" name="thursday" @if(old('thursday') == 'afternoon') checked @endif/> </th>
                                    <th> <input type="radio" value="evening" name="thursday" @if(old('thursday') == 'evening') checked @endif/> </th>

                                </tr>
                                <tr>
                                    <th>Friday</th>
                                    <th> <input type="radio" value="morning" name="friday" @if(old('friday') == 'morning') checked @endif/> </th>
                                    <th> <input type="radio" value="afternoon" name="friday" @if(old('friday') == 'afternoon') checked @endif/> </th>
                                    <th> <input type="radio" value="evening" name="friday" @if(old('friday') == 'evening') checked @endif/> </th>

                                </tr>
                                <tr>
                                    <th>Sunday</th>
                                    <th> <input type="radio" value="morning" name="sunday" @if(old('sunday') == 'morning') checked @endif/> </th>
                                    <th> <input type="radio" value="afternoon" name="sunday" @if(old('sunday') == 'afternoon') checked @endif/> </th>
                                    <th> <input type="radio" value="evening" name="sunday" @if(old('sunday') == 'evening') checked @endif/> </th>

                                </tr>
                                <!-- Table body -->
                            </table>
                        </div>
                        <!-- Table  -->

                        <!-- Academic Details -->
                        <h3>Academic Details (optional)</h3>
                        <br />
                        <br />
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Start Year</label>
                                <input type="date" max="{{ date('Y-m-d') }}" class="form-control" name="startyear" value="{{ old('startyear') }}">
                            </div>


                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">End Year</label>
                                <input type="date" class="form-control" name="endyear" value="{{ old('endyear') }}">

                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Course</label>
                                <input type="text" class="form-control" name="course" value="{{ old('course') }}">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">College/University</label>
                                <input type="text" class="form-control" name="college" value="{{ old('college') }}">

                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Course Type</label>
                                <input type="text" class="form-control" name="coursetype" value="{{ old('coursetype') }}">
                            </div>


                        </div>

                        <h3>Upload Document </h3>
                        <br />
                        <br />
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Image (PP size) </label>
                                <input type="file" class="form-control" name="image">

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Cover letter (PDF only) </label>
                                <input type="file" class="form-control" name="coverletter">

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Resume (PDF only) *</label>
                                <input type="file" class="form-control" name="resume" required>
                            </div>
                        </div>


                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-primary" type="submit" name="apply">Next</button>
                    </form>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main>

@include('user.includes.footer')


