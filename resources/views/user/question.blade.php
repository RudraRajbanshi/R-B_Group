@include('user.includes.header')

    @if(Session::get('data') == null)
        <script type="text/javascript">
            window.location.href = "{{ url('/applyjob') }}";
        </script>
    @endif


 <main id="main">


        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Question</h2>
                    <ol>
                    <li><a href="{{ url('index') }}">Home</a></li>
                        <li>Question</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->




        <section id="contact" class="contact">
            <div class="container">



                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
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


                        <form action="{{ url('/question') }}"  method="POST">

                            <div class="form-group">
                                <label>Q1. Tell us about yourself.</label>
                                <textarea class="form-control" name="q1" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q1') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q2. Are you familiar about health and safety precautions you have to follow </label>
                                <textarea class="form-control" name="q2" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q2') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q3. Can you tell us about your previous job? And if you have left it, can you explain
                                    us why?</label>
                                <textarea class="form-control" name="q3" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q3') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q4. What has been your positive as well as negative management or working
                                    experience?</label>
                                <textarea class="form-control" name="q4" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q4') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q5. How do you handle criticism or you got any complaint from any client or the
                                    client uses abusive language while performing your duties?</label>
                                <textarea class="form-control" name="q5" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q5') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q6. Suppose you are working late night shift and you are working alone and not even a
                                    single person is on the site except you. How would you respond if you found
                                    someone’s unattended property while working and there is no any other authority at
                                    work in that situation?</label>
                                <textarea class="form-control" name="q6" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q6') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q7. What skills do you need for cleaning jobs?</label>
                                <textarea class="form-control" name="q7"  rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q7') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q8. Are you familiar about colour codes? What coloured equipments are used in
                                    kitchen, toilet and for the construction site?</label>
                                <textarea class="form-control" name="q8" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q8') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q9. Which chemicals have you used before? If you have, can you list some of the
                                    chemicals and their uses? Can you list the name of the two concentrated
                                    chemicals?</label>
                                <textarea class="form-control" name="q9" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q9') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q10. What cleaning machines have you used before? Do you know the use of buffer as
                                    well scrubber machine? Can you list any other technical machines you might have
                                    used?</label>
                                <textarea class="form-control" name="q10" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q10') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q11. What major things should you consider while cleaning a toilet and a bathroom?
                                    List the things for toilet and bathroom separately.</label>
                                <textarea class="form-control" name="q11" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q11') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q12. How often do you believe that cleaning equipments should be cleaned and
                                    maintained?</label>
                                <textarea class="form-control" name="q12" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q12') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q13. Do you prefer to work in a team or individually?</label>
                                <textarea class="form-control" name="q13" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q13') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q14. How flexible are your working hours ?Can you be available working early morning
                                    and late night shifts?</label>
                                <textarea class="form-control" name="q14" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q14') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q15. Rate yourself on the scale of 1-10 on handling pressure?</label>
                                <textarea class="form-control" name="q15" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q15') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q16. Is there any task you don’t perform due to allergies ?</label>
                                <textarea class="form-control" name="q16"  rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q16') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q17. What would you do if a child runs over the floor you just mopped?</label>
                                <textarea class="form-control" name="q17" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q17') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q18. How do you stay motivated during repetitive cleaning tasks?</label>
                                <textarea class="form-control" name="q18" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q18') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q19. If you got a complain regarding your co-worker what would you do?</label>
                                <textarea class="form-control" name="q19" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q19') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label>Q20. Why should we hire you? Give us three good reasons?</label>
                                <textarea class="form-control" name="q20" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ old('q20') }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="email" value="{{ Session::get('data') }}">
                            <button class="btn btn-primary" type="submit" name="apply">Submit</button>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @include('user.includes.footer')
