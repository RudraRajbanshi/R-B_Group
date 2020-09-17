<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>R&B Groups</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('admin/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/gritter/css/jquery.gritter.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ asset('admin/lib/chart-master/Chart.js') }}"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>

      </div>
      <!--logo start-->
 <a  href="{{ url('admin/index') }}" class="logo"><img style="width:150px;" src="{{ asset('user/assets/img/logo.png') }}" alt="" class="img-fluid"></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu" >
        <!--  notification start -->
        <ul class="nav top-menu" >

          {{-- <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown" >
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              @if(auth()->user()->unReadNotifications->count())
              <span class="badge bg-warning">{{ auth()->user()->unReadNotifications->count() }}</span>
              @endif
              </a>
            <ul class="dropdown-menu extended notification" >
              <div class="notify-arrow notify-arrow-yellow" ></div>
              <li style="width:350px">
                <p class="yellow">You have {{ auth()->user()->unReadNotifications->count() }} unread notifications</p>
              </li>

              @foreach(auth()->user()->unreadNotifications as $notification)
              <li style="background:#4ECDC4;width: 350px">
                <a href="{{ url('admin/notification/markAsRead') }}">
                  <span class="label label-danger" ><i class="fa fa-bolt" ></i></span>
                  {{ $notification->data['data'] }}<br>

                  <span class="small italic">{{ $notification['created_at']->diffForHumans() }}</span>
                  </a>
              </li>

              @endforeach
              @foreach(auth()->user()->readNotifications as $notification)
              <li style="background:#F7F8F9;width: 350px">
                <a href="{{ url('admin/notification') }}">
                  <span class="label label-danger" ><i class="fa fa-bolt" ></i></span>
                  {{ $notification->data['data'] }}<br>

                  <span class="small italic">{{ $notification['created_at']->diffForHumans() }}</span>
                  </a>
              </li>

              @endforeach



             <!--  <li>
                <a href="index.html#">See all notifications</a>
              </li> -->
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end --> --}}
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          {{-- <li><a class="logout" href="{{ route('logout') }}">Logout</a></li> --}}
         <li><a class="logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </ul>
      </div>
    </header>
    <!--header end-->
