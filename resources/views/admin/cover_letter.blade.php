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
                    <form style="float:left;margin-right:1%" method="GET" action = "{{ url('answers') }}">
                    <input type = 'hidden' name = 'email' value = "{{ $applicant['email'] }}" />
                      <input type = 'hidden' name = '_token' value = '{{ csrf_token() }}' />
                     <input type="submit" class="btn btn-primary" value="View Answers">
                      </form>

                    <a class="btn btn-primary" style="float:left;margin-right:1%" href="{{ url('/view_cover_letter/'.$applicant['id']) }}">View Cover Letter</a>
                    <a class="btn btn-primary" href="{{ url('/view_resume/'.$applicant['id']) }}">View Resume</a>

                    </div>
        <div id="print_content" class="row mt" style="border:1px solid black;width:75%;margin-left:1%">

          <div class="col-md-12" >

            <form action="{{ url('/question') }}"  method="POST">
                 <div style="width:100%;height:80px;margin-top:2%">
                        <div style="float:left;width:20%;">
                            <img style="width:200%" src="{{ asset('user/assets/img/logo.png') }}"  alt="" class="img-fluid">
                        </div>
                        <div style="float:right;margin-top:7%">
                       <h5>Email: {{ $applicant['email'] }}</h5>
                       </div>
                       </div>

                       <hr>
                       {{-- <img src="{{ URL::to('/').'/uploads/'.$applicant['cover_letter'] }}" width="100%" height="100%" alt="NO PHOTO"> --}}
                        <iframe style="width:100%;height:500px" src="{{ url('uploads/'.$applicant['cover_letter']) }}"></iframe>
                       <br><br><br>

                            {{-- <div class="form-group">
                                <label>Q1. Tell us about yourself.</label>
                                <textarea class="form-control" name="q1" rows="5" data-rule="required" required
                                    data-msg="Please write something for us" placeholder="Answer">{{ $answers['Q1'] }}</textarea>
                                <div class="validate"></div>
                            </div> --}}


                        </form>




          <!-- /col-md-12 -->
        </div>


        <!-- /row -->
      </section>
       {{-- <button onclick="printContent('print_content')" class="btn btn-success" style="margin:0 0 2% 2%" type="submit" id="print">Print</button>
      <br>
      <i style="margin-left:2%"> Note: For *.pdf files, Print option is at the top of the image.</i> --}}
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
