<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          @php $data=Auth::guard('admin')->user(); @endphp
          
          <img src="{{asset('assets/back/images/admin.png ')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::guard('admin')->user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{__('Online')}}</a>
        </div>
      </div>
     <ul class="sidebar-menu" data-widget="tree">
        <li class="header">{{__('CMS Navigation')}}</li>

      

        

        <li class="{{ (request()->is('adminarea')) ? 'active' : '' }}">
          <a href="{{route('adminarea')}}">
            <i class="fa fa-dashboard"></i> <span>{{__('Dashboard')}}</span>
          </a>
        </li>
        <li class="{{ (request()->is('adminarea/employes')) ? 'active' : '' }}">
          <a href="{{route('employes.index')}}">
            <i class="fa fa-users text-yellow"></i> <span>{{__('Manage Employes')}}</span>
          </a>
        </li>
        <li class="{{ (request()->is('adminarea/companies')) ? 'active' : '' }}">
          <a href="{{route('companies.index')}}">
            <i class="fa fa-building text-yellow"></i> <span>{{__('Manage Companies')}}</span>
          </a>
        </li>


        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out text-red"></i> <span>{{__('messages.logout')}}</span>
          </a>
          <form id="logout-form" action="{{ route('admin_logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>