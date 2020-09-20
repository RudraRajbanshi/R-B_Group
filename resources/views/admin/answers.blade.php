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

        <!-- row -->
        <div style="width:100%;margin:1% 0 -1% 1%">
            <a class="btn btn-primary" style="float:left;margin-right:1%" href="{{ url('/full_details/'.$applicant['id']) }}">Details</a>
                    <form style="float:left;margin-right:1%" method="GET" action = "{{ url('answers') }}">
                    <input type = 'hidden' name = 'email' value = "{{ $applicant['email'] }}" />
                      <input type = 'hidden' name = '_token' value = '{{ csrf_token() }}' />
                     <input type="submit" class="btn btn-primary active" value="View Answers">
                      </form>

                    <a class="btn btn-primary" style="float:left;margin-right:1%" href="{{ url('/view_cover_letter/'.$applicant['id']) }}">View Cover Letter</a>
                    <a class="btn btn-primary" href="{{ url('/view_resume/'.$applicant['id']) }}">View Resume</a>

                    </div>
        <div id="print_content" class="row mt" style="border:1px solid black;width:80%;margin-left:1%">

          <div class="col-md-12" >

            <form action="{{ url('/question') }}"  method="POST">
                 <div style=";width:100%;height:80px;margin-top:2%">
                        <div style="float:left;width:20%;">
                            <img style="width:200%" src="{{ asset('user/assets/img/logo.png') }}"  alt="" class="img-fluid">
                        </div>
                        <div style="float:right;margin-top:7%">
                       <h5>Email: {{ $answers['email'] }}</h5>
                       </div>


                       </div>

                       <hr>


                            <div class="form-group">
                                <label>Q1. Tell us about yourself.</label>
                                <textarea class="form-control" name="q1" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q1'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q2. Are you familiar about health and safety precautions you have to follow </label>
                                <textarea class="form-control" name="q2" rows="2" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q2'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q3. Can you tell us about your previous job? And if you have left it, can you explain
                                    us why?</label>
                                <textarea class="form-control" name="q3" rows="3" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q3'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q4. What has been your positive as well as negative management or working
                                    experience?</label>
                                <textarea class="form-control" name="q4" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q4'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q5. How do you handle criticism or you got any complaint from any client or the
                                    client uses abusive language while performing your duties?</label>
                                <textarea class="form-control" name="q5" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q5'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q6. Suppose you are working late night shift and you are working alone and not even a
                                    single person is on the site except you. How would you respond if you found
                                    someone’s unattended property while working and there is no any other authority at
                                    work in that situation?</label>
                                <textarea class="form-control" name="q6" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q6'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q7. What skills do you need for cleaning jobs?</label>
                                <textarea class="form-control" name="q7"  rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q7'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q8. Are you familiar about colour codes? What coloured equipments are used in
                                    kitchen, toilet and for the construction site?</label>
                                <textarea class="form-control" name="q8" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q8'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q9. Which chemicals have you used before? If you have, can you list some of the
                                    chemicals and their uses? Can you list the name of the two concentrated
                                    chemicals?</label>
                                <textarea class="form-control" name="q9" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q9'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q10. What cleaning machines have you used before? Do you know the use of buffer as
                                    well scrubber machine? Can you list any other technical machines you might have
                                    used?</label>
                                <textarea class="form-control" name="q10" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q10'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q11. What major things should you consider while cleaning a toilet and a bathroom?
                                    List the things for toilet and bathroom separately.</label>
                                <textarea class="form-control" name="q11" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q11'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q12. How often do you believe that cleaning equipments should be cleaned and
                                    maintained?</label>
                                <textarea class="form-control" name="q12" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q12'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q13. Do you prefer to work in a team or individually?</label>
                                <textarea class="form-control" name="q13" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q13'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q14. How flexible are your working hours ?Can you be available working early morning
                                    and late night shifts?</label>
                                <textarea class="form-control" name="q14" rows="5" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q14'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q15. Rate yourself on the scale of 1-10 on handling pressure?</label>
                                <textarea class="form-control" name="q15" rows="2" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q15'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q16. Is there any task you don’t perform due to allergies ?</label>
                                <textarea class="form-control" name="q16"  rows="3" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q16'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q17. What would you do if a child runs over the floor you just mopped?</label>
                                <textarea class="form-control" name="q17" rows="3" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q17'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q18. How do you stay motivated during repetitive cleaning tasks?</label>
                                <textarea class="form-control" name="q18" rows="4" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q18'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q19. If you got a complain regarding your co-worker what would you do?</label>
                                <textarea class="form-control" name="q19" rows="3" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q19'] }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q20. Why should we hire you? Give us three good reasons?</label>
                                <textarea class="form-control" name="q20" rows="4" data-rule="required" disabled
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q20'] }}</textarea>
                                <div class="validate"></div>
                            </div>


                        </form>




          <!-- /col-md-12 -->
        </div>


        <!-- /row -->
      </section>
       <button onclick="printContent('print_content')" class="btn btn-success" style="margin:0 0 2% 2%" type="submit" name="apply">Print</button>
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
