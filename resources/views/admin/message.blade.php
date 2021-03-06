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
            <a class="active"  href="{{ url('message') }}">
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
    <section id="main-content">
      <section class="wrapper" style="height: 1000px">
        <h3><i class="fa fa-angle-right"></i>Messages</h3>

        Total: {{ $contact->count()}}

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
              <table class="table table-striped table-advance table-hover">


                <thead>
                  <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>

                    <th>Time</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($contacts as $c)


                  <tr>

                    <td>{{ $c['name'] }}</td>
                    <td>{{ $c['email'] }}</td>
                    <td>{{ $c['subject'] }}</td>
                    <td>{{ substr($c->message, 0,  50) }}......
                    <a href="{{ url('/view_message/'.$c['id']) }}"> View full</a></td>

                    <td>{{ $c['created_at']->diffForHumans() }} </td>



                   <!--  <td><span class="label label-info label-mini">Due</span></td> -->
                    <td>
                     <!--  <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->


                      <form action = "{{ url('admin/delete_message') }}" method = 'POST'>
                      <input type = 'hidden' name = 'id' value = "{{ $c['id'] }}" />
                      <input type = 'hidden' name = '_token' value = '{{ csrf_token() }}' />
                      <input type = 'hidden' name = '_method' value = 'DELETE' />
                     <input type="submit" value="Delete">
                      </form>

                      <!-- <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a> -->
                    </td>

                  </tr>
                  @endforeach

                </tbody>
              </table>

              {{ $contacts->links() }}


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
