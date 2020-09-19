@include('admin.includes.header')
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

          <h4 class="centered">Admin Panel</h4>
          <li class="mt">
            <a  href="{{ url('admin/index') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li>
            <a class="active" href="{{ url('applicant/details') }}">
              <i class="fa fa-map-marker"></i>
              <span>Applicant Details</span>
              </a>
         </li>
         <li>
            <a href="{{ url('message') }}">
              <i class="fa fa-map-marker"></i>
              <span>Message</span>
              </a>
         </li>
          <li>
            <a href="{{ url('change_password') }}">
              <i class="fa fa-map-marker"></i>
              <span>Change Password</span>
              </a>
         </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>



<!--main content start-->
    <section id="main-content" >
      <section class="wrapper" style="height: auto">
        {{-- <h3><i class="fa fa-angle-right"></i>Details</h3> --}}

       {{-- <div style="background:red;width:40%;height:10%">
            <h5 style="float:left">  <a href="" class="btn btn-primary">View Answers</a> </h5>
            <h5 >  <a href="" class="btn btn-primary">View Cover Letter</a> </h5>
            <h5>  <a href="" class="btn btn-primary">View Resume</a> </h5>

       </div> --}}
       <div style="width:100%;margin:1% 0 -1% 1%">
                    <form style="float:left;margin-right:1%" method="GET" action = "{{ url('answers') }}">
                    <input type = 'hidden' name = 'email' value = "{{ $applicant['email'] }}" />
                      <input type = 'hidden' name = '_token' value = '{{ csrf_token() }}' />
                     <input type="submit" class="btn btn-primary" value="View Answers">
                      </form>

                    <a class="btn btn-primary" style="float:left;margin-right:1%" href="{{ url('/view_cover_letter/'.$applicant['id']) }}">View Cover Letter</a>
                    <a class="btn btn-primary" href="{{ url('/view_resume/'.$applicant['id']) }}">View Resume</a>

                    </div>



        <!-- row -->
        <div id="print_content" class="row mt" style="border:1px solid black;width:90%;margin-left:1%">

          <div class="col-md-12" >


          <div class="php-email-form" >
                    <form class="applyjob" >

                       <div style="width:100%;height:100px;margin-top:2%">
                        <div style="float:left;width:75%">
                            <img style="width:60%" src="{{ asset('user/assets/img/logo.png') }}"  alt="" class="img-fluid">


                        </div>
                        <div style="width:15%;height:100%;float:right;border:1px solid black">

                            <img src="{{ URL::to('/').'/uploads/'.$applicant['image'] }}" width="100%" height="100%" alt="NO PHOTO">
                        </div>


                       </div>

                        <hr>

                        <div class="form-row" >

                            <div class="col-md-3 mb-3">
                                <label for="validationDefault02">Given Name *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['name'] }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Middle Name</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['middle_name'] }}">

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Surname *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['surname'] }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault05">Gender *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['gender'] }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Date of Birth *</label>
                            <input type="text" max="{{ date('Y-m-d') }}" class="form-control" disabled value="{{ $applicant['dob'] }}" required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Place of Birth *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['place_of_birth'] }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault02">Suburb</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['suburb'] }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">State</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['state'] }}">

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Country *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['country'] }}" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Street</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['street'] }}">

                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05"> Current Suburb *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['suburb2'] }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Current State *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['state2'] }}" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Postcode *</label>
                                <input type="text" class="form-control"disabled value="{{ $applicant['postcode'] }}" required>

                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <h3>Contact Details </h3>
                            </div>
                            <div class="col-md-5 mb-3">
                                <h3><br></h3>

                            </div>
                        </div>
                        <!-- Contact details -->

                        <br />
                        <br />
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Phone *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['phone'] }}" required>
                            </div>

                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Email Address *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['email'] }}" required>
                            </div>
                        </div>
                        <!-- Document Details -->
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <h3>Document (Optional) </h3>
                            </div>
                            <div class="col-md-5 mb-3">
                                <h3><br></h3>

                            </div>
                        </div>
                        <br />
                        <br />
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Aust. Driver’s Licence No</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['driver_licence'] }}">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">State/Territory</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['driver_state'] }}">

                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Firearms Licence No</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['firearms_licence'] }}">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">State/Territory</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['firearms_state'] }}">


                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Passport No *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['passport'] }}" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Passport Country *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['passport_country'] }}" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <h3>Visa Details </h3>
                            </div>
                            <div class="col-md-5 mb-3">
                                <h3><br></h3>

                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-row">

                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Visa type *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['visa_type'] }}" required>

                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault05">Visa Issued Date *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['visa_issued_date'] }}" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault05">Visa Expiry Date *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['visa_expiry_date'] }}" required>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Work Permit *</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['work_permit'] }}" required>

                            </div>
                            <div class="col-md-3 mb-3">

                            </div>
                            <div class="col-md-3 mb-3">
                                  <label for="validationDefault02"><br></label>
                                <h4><br></h4>
                            </div>
                        </div>


                        <!-- Table  -->
                        <br>
                        {{-- <div class="form-row" id="test-color">
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
                        </div> --}}
                        <!-- Table  -->

                        <!-- Academic Details -->
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <h3>Academic Details (optional)</h3>
                            </div>
                            <div class="col-md-5 mb-3">
                               <h3><br></h3>

                            </div>
                        </div>

                        <br />
                        <br />
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">Start Year</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['academic_start_year'] }}">
                            </div>


                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">End Year</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['academic_end_year'] }}">

                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Course</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['course'] }}">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault02">College/University</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['college'] }}">

                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault05">Course Type</label>
                                <input type="text" class="form-control" disabled value="{{ $applicant['course_type'] }}">
                            </div>
                             <div class="col-md-5 mb-3">
                                <h3><br></h3>
                            </div>
                            <div class="col-md-5 mb-3">
                                <h3></h3>
                            </div>



                        </div>

                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <h3>Availability</h3>
                            </div>
                            <div class="col-md-5 mb-3">
                               <h3><br></h3>

                            </div>
                        </div>


                        <div class="form-row">
                             <div class="col-md-5 mb-3">
                                 <textarea disabled cols="50" rows="7">{{ $shift }}</textarea>

                            </div>
                            <div class="col-md-5 mb-3">
                                <h3><br></h3>
                            </div>
                            <div class="col-md-5 mb-3">
                                <h3><br></h3>
                            </div>


                        </div>
                         <div class="form-row">
                             <div class="col-md-5 mb-3">
                                <h3><br></h3>
                            </div>
                            <div class="col-md-4 mb-3">

                            </div>
                            <div class="col-md-4 mb-3">

                            </div>


                        </div>
                    </form>


                </div>



          <!-- /col-md-12 -->
        </div>


        <!-- /row -->
      </section>
      <button class="btn btn-success" onclick="printContent('print_content')" style="margin:0 0 2% 2%" type="submit" name="apply">Print</button>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

@include('admin.includes.footer')

<script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>
