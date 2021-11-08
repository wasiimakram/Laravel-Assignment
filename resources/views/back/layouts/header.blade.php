<header class="main-header">
    <!-- Logo -->
    <a href="{{url('/adminarea')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>{{__('A')}}</b>{{ __('P') }}</span>
      <!-- logo for regular state and mobile devices -->
      <span>Admin<strong>Panel</strong></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">{{__('Toggle navigation')}}</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="">
            <a target="_blank" href="{{url('/')}}">
              <i class="fa fa-globe"></i>
              {{__('Visit Website')}}
              <!-- <span class="label label-warning">10</span> -->
            </a>

          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @php $data=Auth::guard('admin')->user(); @endphp
              
                <img src="{{asset('assets/back/images/admin.png')}}" width="25px" height="25px" class="img-circle" alt="User Image">
              <span class="hidden-xs">{{Auth::guard('admin')->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-lock"></i> {{__('Logout')}}
                    </a>
                    <form id="logout-form" action="{{ route('admin_logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                  </li>
                </ul>
              </li>
            </ul> 
          </li>
        </ul>
      </div>
    </nav>
  </header>