<section id="contact" class="contact" >

      <div class="container" style="background:#F7FAFB">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
               @if(\Session::has('msg'))

               <script>
                   alert('Your message has been sent. Thank you!')
               </script>

          @endif
          @if($errors->any())
          <script>
                   alert('Message sending failed. Please provide valid information')
               </script>
          @endif
          <p></p>
          <p></p>
              <center><h3>Contact R&B GROUPS</h3></center>
              <br>
          <form action="{{ url('/contact') }}" method="POST" role="form" >
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" required class="form-control" id="name" placeholder="Your Name"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" required name="email" id="email" placeholder="Your Email"
                    data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" required name="subject" id="subject" placeholder="Subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" required rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                {{-- <div class="loading">Loading</div> --}}
                 {{-- <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div> --}}



              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
            </form>
            <p></p>
          </div>

        </div>
    </section>
