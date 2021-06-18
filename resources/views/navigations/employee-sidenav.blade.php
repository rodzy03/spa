<!-- begin #sidebar -->
    <div id="sidebar" class="sidebar">
      <!-- begin sidebar scrollbar -->
      <div data-scrollbar="true" data-height="100%">
       
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
          <li class="nav-header">Navigation</li>
          <li class="has-sub ">
            <a href="javascript:;">
                  
                <i class="fa fa-th-large"></i>
                <span>Dashboard</span>
              </a>
            
          </li>
          @if(Auth::user()->role == 'admin')
          <li class="has-sub active">
            <a href="{{route('get_students')}}" >
                  
                <i class="fa fa-user"></i>
                <span>Manage Student</span>
              </a>
            
          </li>
          @endif
          @if(Auth::user()->role == 'student')
          <li class="has-sub active">
            <a href="{{route('get_students')}}" >
                  
                <i class="fa fa-user"></i>
                <span>Student Hours</span>
              </a>
            
          </li>
          @endif
        <!-- begin sidebar minify button -->
          <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
              <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
      </div>
      <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
    <!-- end #sidebar -->
