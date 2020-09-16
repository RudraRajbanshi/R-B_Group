<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

          <h4 class="centered">Admin Panel</h4>
          <li class="mt">
            <a class="active" href="{{ url('admin/index') }}">
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
            <a href="{{ url('change_password') }}">
              <i class="fa fa-map-marker"></i>
              <span>Change Password</span>
              </a>
         </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
