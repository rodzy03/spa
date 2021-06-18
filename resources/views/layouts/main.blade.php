<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <title>PUPQC Scholarship | @yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />


  @include('layouts.includes.base-css')
  @yield('extra-css')
  <style>
    #logo {
      display: inline-block;
      margin: 10px;
      height: 35px;
      width: auto;
      /* correct proportions to specified height */
      border-radius: 50%;
      /* makes it a circle */
    }
  </style>
</head>

<body>

  <!-- begin #page-loader -->
  <div id="page-loader" class="fade show"><span class="spinner"></span></div>
  <!-- end #page-loader -->

  <!-- begin #page-container -->
  <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    <div id="header" class="header navbar-default">
      <!-- begin navbar-header -->
      <div class="navbar-header">
        <a href="#"><img id="logo" src="{{asset('assets/img/logo/pup.png')}}"></a>

        <b style="font-size: 16px; margin-right: 1px;">PUPQC Scholarship</b>


      </div>
      <!-- end navbar-header -->

      <!-- begin header-nav -->
      <ul class="navbar-nav navbar-right">
        <li>
          <form class="navbar-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter keyword" />
              <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </li>
        <li class="dropdown">
          <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
            <i class="fa fa-bell"></i>
            <span class="label">12</span>
            
          </a>
          <ul class="dropdown-menu media-list dropdown-menu-right">
            <li class="dropdown-header">NOTIFICATIONS (12)</li>

          </ul>
        </li>

        <li class="dropdown navbar-user">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('assets/img/user/profile.png')}}" alt="" />
            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span> <b class="caret"></b>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="javascript:;" class="dropdown-item">Edit Profile</a>
            <a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
            <a href="javascript:;" class="dropdown-item">Calendar</a>
            <a href="javascript:;" class="dropdown-item">Setting</a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="dropdown-item">Log Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
      </ul>
      <!-- end header navigation right -->
    </div>
    <!-- end #header -->

    @include('navigations.employee-sidenav')

    @yield('content')



    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
  </div>
  <!-- end page container -->


  @include('layouts.includes.base-js')
  @yield('extra-js')

</body>

</html>