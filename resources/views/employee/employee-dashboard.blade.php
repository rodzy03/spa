@extends('layouts.main')
@section('title','dashboard')
@section('content')

@section('extra-css')

@endsection

<!-- begin #content -->
<div id="content" class="content">
  <!-- begin breadcrumb -->
  <ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>

  </ol>
  <!-- end breadcrumb -->

  <!-- begin page-header -->
  <h1 class="page-header">&nbsp;<small></small></h1>
  <!-- end page-header -->
  <!-- begin row -->
  <div class="row ">
    <!-- begin col-3 -->
    <div class="col-lg-12 col-md-6">
      
      
          <!-- begin card -->
          <div class="card text-center">
            <div class="card-header bg-black-lighter">
              &nbsp;
            </div>
            <div class="card-block">
            <p class="card-title" style="font-size:30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">LOCAL TIME</p>
              <p class="card-text" id="time" style="font-size:45px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"></p>
              
            </div>

            <div class="card-footer text-muted">
              &nbsp;
            </div>
          </div>
          <!-- end card -->
        

           <!-- begin card -->
           <div class="card text-center div_has_time_in" style="display: none;">
            <div class="card-header" style="font-size:20px;"> 
            PUPQC SCHOLARSHIP
            </div>
            <div class="card-block">
              <h4 class="card-title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"></h4>
              <p class="card-text" style="font-size:35px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">YOU HAVE TIME IN FOR TODAY. THANKYOU!</p>
              
            </div>

            <div class="card-footer text-muted ">
              &nbsp;
            </div>
          </div>
          <!-- end card -->
      <div class="row">
        <!-- begin col-3 -->

        <div class="col-lg-6 col-md-6 div_time_in " style="display: none;">
          <!-- begin card -->
          <div class="card text-center">
            <div class="card-header">
              Featured
            </div>
            <div class="card-block">
              <h4 class="card-title">TIME IN</h4>
              <p class="card-text" style="font-size: 16px;">The time you click this it will accumulate to you're monthly hours.</p>
              <a href="javascript:;" class="btn btn-lg btn-primary btn_time_in"> Submit</a>
            </div>

            <div class="card-footer text-muted">
              &nbsp;
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col-3 -->

        <div class="col-lg-6 col-md-6 div_time_out " style="display: none;">
          <!-- begin card -->
          <div class="card text-center">
            <div class="card-header">
              Featured
            </div>
            <div class="card-block">
              <h4 class="card-title">TIME OUT</h4>
              <p class="card-text" style="font-size: 16px;">The time you click this it will accumulate to you're monthly hours.</p>
              <a href="javascript:;" class="btn btn-lg btn-danger btn_time_out">Submit</a>
            </div>

            <div class="card-footer text-muted">
              &nbsp;
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col-3 -->
      </div>
      <!-- end row -->
    </div>
    <!-- begin row -->
  <input id="current_time" type="text" value="{{$current_time}}" hidden/>




  </div>
  <!-- end #content -->

  @section('extra-js')

  <script src="{{asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
  <script src="{{asset('assets/js/moment.js')}}"></script>
  <script>
    $(document).ready(function() {
      App.init();


    });
    setTimeout(function() {

        $.ajax({
          url: "{{route('check_if_has_time_in')}}"
          , method: 'post'
          , data : {_token:"{{csrf_token()}}" }
          , success:function(data) {
            
            if(data['has_time_in'] > 0) {
              $('.div_time_in').hide();
              $('.div_time_out').show();
            }
            else if(data['has_time_in'] == 0){
              
              $('.div_time_in').show();
              $('.div_time_out').hide();
            }

            if(data['has_time_out'] > 0) {
              $('.div_has_time_in').show();
              $('.div_time_in').hide();
              $('.div_time_out').hide();
            }
            
            
          },
          error: function() {

          }
        });
    },500)
    
    $('.btn_time_in').click(function(){
      
      swal({
				title: 'TIME IN SUCCESSFUL.',
				icon: 'success',
				timer: 1500,
        
			});

      setTimeout(function() {

        $.ajax({
          url: "{{route('time_in')}}"
          , method: 'post'
          , data : {_token:"{{csrf_token()}}" }
          , success:function(data) {
            location.reload();
          },
          error: function() {

          }
        });

      },1500);
      
    });

    $('.btn_time_out').click(function(){
      
      swal({
				title: 'TIME OUT SUCCESSFUL.',
				icon: 'success',
				timer: 1500,
        
			});

      setTimeout(function() {

        $.ajax({
          url: "{{route('time_out')}}"
          , method: 'post'
          , data : {_token:"{{csrf_token()}}" }
          , success:function(data) {
            location.reload();
          },
          error: function() {

          }
        });

      },1500);
      
    });

  </script>
  <script>
  
console.log(formatAMPM(new Date));
    setInterval(function() {
      var curr_time = $('#current_time').val();
      var today = new Date(curr_time);
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      
      document.getElementById('time').innerHTML = "TODAY " + moment(h + ":" + m + ":" + s, 'HH:mm:ss').format('hh : mm : ss A');

    }, 500);

    
  </script>
  @endsection
  @endsection