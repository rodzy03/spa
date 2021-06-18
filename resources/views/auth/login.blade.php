<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <title>PUPQC Scholarship System | Login</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  @include('layouts.includes.base-css')
  <style>
  #logo {
    display: inline-block;
    margin: 15px; 
    margin-left: 50px;
    height: 70px;
    width: auto; /* correct proportions to specified height */
    border-radius: 50%; /* makes it a circle */
  }
  </style>
  
</head>

<body class="pace-top bg-white">
  <!-- begin #page-loader -->
  <div id="page-loader" class="fade show"><span class="spinner"></span></div>
  <!-- end #page-loader -->

  <!-- begin #page-container -->
  <div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login login-with-news-feed">
      <!-- begin news-feed -->
      <div class="news-feed">
        <div class="news-image" style="background-image: url({{asset('assets/img/login-bg/background_login.jpg)')}}"></div>
        <div class="news-caption">
          <h4 class="caption-title"><b>PUPQC Scholarship </b>System</h4>
          <p>
            <!-- Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit. -->
            .
          </p>
        </div>
      </div>
      <!-- end news-feed -->
      <!-- begin right-content -->
      <div class="right-content">
        <!-- begin login-header -->
        <div class="login-header" style="text-align: center;">
          <div class="brand">
          <a href="#"><img id="logo" src="{{asset('assets/img/logo/pup.png')}}"></a>
          
            <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Polytechnic University of The Philippines</small>
            <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quezon City Branch.</small>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
        </div>
        <!-- end login-header -->
        <!-- begin login-content -->
        <div class="login-content">
          <form method="POST" action="{{ route('login') }}" class="margin-bottom-0">
            @if(Session::get('fail'))
            <div class="alert alert-danger">
              {{Session::get('fail')}}
            </div>
            @endif
            @csrf
            <div class="form-group m-b-20">
              <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg" placeholder="Email Address" />
              <span class="text-danger">@error('email') {{ $message}} @enderror</span>
            </div>
            <div class="form-group m-b-20">
              <input id="password" type="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
              <span class="text-danger">@error('password') {{ $message}} @enderror</span>
            </div>
            {{--<div class="checkbox checkbox-css m-b-20">
                      <input type="checkbox" id="remember_checkbox" /> 
                      <label for="remember_checkbox">
                        Remember Me
                      </label>
                  </div>--}}
            <div class="login-buttons">
              <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
            </div>
            {{--<div class="m-t-20">
                      Not a member yet? Click <a href="javascript:;">here</a> to register.
                  </div>--}}
                  <hr />
                        <p class="text-center text-grey-darker">
                            &copy; PUPQC Scholar All Right Reserved 2020.
                        </p>
          </form>
        </div>
        <!-- end login-content -->
      </div>
      <!-- end right-container -->
    </div>
    <!-- end login -->


  </div>
  <!-- end page container -->

  @include('layouts.includes.base-js')

  <script>
    $(document).ready(function() {
      App.init();
      LoginV2.init();
    });
  </script>
</body>

</html>