@include('admin.includes.header')
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

          <h4 class="centered">Admin Panel</h4>
          <li class="mt">
            <a href="{{ url('admin/index') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li>
            <a href="{{ url('applicant/details') }}">
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
            <a class="active" href="{{ url('change_password') }}">
              <i class="fa fa-map-marker"></i>
              <span>Change Password</span>
              </a>
         </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>




<!--main content start-->
    <section id="main-content">
      <section class="wrapper" style="height: 1000px">
        <h3><i class="fa fa-angle-right"></i>Change Password</h3>

        <!-- row -->
        <div class="row mt">

          <div class="col-md-12">
             {{-- <a href="{{ url('admin/createcar') }}" class="btn btn-theme" >Add</a> --}}
            <div class="content-panel">
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

           <div class="row mt" style="border:1px;width:75%;margin:0 0 0 1%">

          <form action = "{{ url('change_password') }}" method = 'POST'>
	Old Password : <input type = 'password' name = 'opass' class = 'form-control' ><br>
	New Password : <input type = 'password' name = 'password' class = 'form-control' ><br>
	Confirm Password : <input type = 'password' name = 'ncpass' class = 'form-control' ><br>
	<input type = 'hidden' name = '_token' value="{{ csrf_token() }}">
	<input type = 'submit' value="Save Changes" class = 'btn btn-danger'/>
</form>
</div>




            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

@include('admin.includes.footer')
