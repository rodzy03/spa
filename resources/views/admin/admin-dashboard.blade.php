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
       <div class="row">
        <!-- begin col-3 -->
        <div class="col-lg-4 col-md-6">
            <div class="widget widget-stats bg-green-darker">
                <div class="stats-icon"><i class="fa fa-folder"></i></div>
                <div class="stats-info">
                    <h4>TRANSACTIONS <strong style="color: white"></strong></h4>
                    <p>
                    
                    </p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-4 col-md-6">
            <div class="widget widget-stats bg-purple-darker">
                <div class="stats-icon"><i class="fa fa-edit"></i></div>
                <div class="stats-info">
                    <h4>FOR REVISION </h4>
                    <p>
                       
                    </p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-4 col-md-6">
            <div class="widget widget-stats bg-blue-darker">
                <div class="stats-icon"><i class="fa fa-thumbs-up"></i></div>
                <div class="stats-info">
                    <h4>APPROVED</h4>
                    <p>
                        
                    </p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        
    </div>
      <!-- end row -->

      
      
    </div>
    <!-- end #content -->

  @section('extra-js')

  <script src="{{asset('assets/js/demo/dashboard-v2.min.js')}}"></script>
  
  <script>
    $(document).ready(function() {
      App.init();
      DashboardV2.init();
    });

    </script>
  
  @endsection
@endsection