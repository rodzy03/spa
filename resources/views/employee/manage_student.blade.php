@extends('layouts.main')
@section('title','dashboard')
@section('content')

  @section('extra-css')
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

    
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

        <!-- BEGIN panel-group -->
        <div class="panel-group faq" id="faq-list">
                    <!-- BEGIN panel -->
                    <div class="panel ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a ><i class="fa fa-question-circle fa-fw text-info m-r-5"></i> SCHOLARSHIP AND FINANCIAL SERVICES  </a>
                            </h4><br>
                            <button class="form-control col-md-3 btn btn-info" data-toggle="modal" data-target="#modal-add">import</button>
                        </div>
                        <!-- LIST OF CHED TDP GRANTEES ACADEMIC YEAR 2020-2021 -->
                        <div id="faq-2" >
                            <div class="panel-body">
                                <!-- <p>
                                The available scholarship programs are posted in the 
                                Facebook Page Scholarship and Financial Assistance Services – 
                                PUP Manila and Facebook Page PUPQC Scholarship and Financial Services.
                                </p> -->
                                <table id="data-table-default" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Student Number</th>
                                            <th class="text-nowrap">Student Name</th>
                                            <th class="text-nowrap">Year and Section</th>
                                            <th class="text-nowrap">GWA</th>
                                            <th class="text-nowrap">Scholarship Name</th>
                                        </tr>
                                    
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                        <tr class="odd gradeX">
                                            <td>{{$row->student_number}}</td>
                                            <td>{{$row->firstname}} {{$row->middlename}} {{$row->lastname}}</td>
                                            <td>{{$row->year_and_section}}</td>
                                            <td>{{$row->gwa}}</td>
                                            <td>{{$row->scholarship_name}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END panel -->
                    
                </div>

                 
    <div class="modal modal-message fade" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    {{--<h4 class="modal-title">Add Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="note note-lime note-with-left-icon m-b-15">
                            <div class="note-icon"><i class="fa fa-briefcase"></i></div>
                            <div class="note-content text-left">
                                <h4><b>Import Students</b></h4>
                                <p>
                                   
                                </p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-lg-6  col-md-12">
                                <div class="stats-content">
                                    <label >Excel File <span class="required">*</span></label>
                                    <input class="form-control btn btn-inverse " style="height: 40px;" type="file" id="inMainDocument" />
                                    <label id="main_r_store" for="inMainDocument" ></label>
                                </div>
                            </div>
                            
                            
                        </div>
                       
                    </fieldset>
                </div>
                
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="button" class="btn btn-success" id="btnRegister">
                                            <span id=loading class="fas fa-spinner fa-pulse"></span>&nbsp;Submit</button>
                </div>
            </div>
        </div>
    </div>
      
    </div>
    <!-- end #content -->

  @section('extra-js')

  
  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
	<script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('assets/js/demo/table-manage-default.demo.min.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

  <script>
    $(document).ready(function() {
      App.init();
      //DashboardV2.init();
      TableManageDefault.init();
      $('#loading').hide();
    });

    $('#btnRegister').click(function(){
        
        var form_data = new FormData();
        form_data.append("file", document.getElementById('inMainDocument').files[0]);
        form_data.append("_token", "{{csrf_token()}}");

        $('#loading').show();

        setTimeout(function(){


        $.ajax({
            url: "{{route('import_student')}}"
            ,type: 'post'
            ,processData:false
            ,contentType:false
            ,dataType: 'json'
            ,async: false
            ,data : form_data
            ,success:function(data){
                console.log(data)
            }
            ,error:function(error){
                console.log(error)
            }
        });

        window.location.reload(); 


        }, 2000);

    });
    </script>
  
  @endsection
@endsection