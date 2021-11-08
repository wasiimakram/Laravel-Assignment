<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(url('/adminarea')); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><?php echo e(__('A')); ?></b><?php echo e(__('P')); ?></span>
      <!-- logo for regular state and mobile devices -->
      <span>Admin<strong>Panel</strong></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only"><?php echo e(__('Toggle navigation')); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="">
            <a target="_blank" href="<?php echo e(url('/')); ?>">
              <i class="fa fa-globe"></i>
              <?php echo e(__('Visit Website')); ?>

              <!-- <span class="label label-warning">10</span> -->
            </a>

          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php $data=Auth::guard('admin')->user(); ?>
              
                <img src="<?php echo e(asset('assets/back/images/admin.png')); ?>" width="25px" height="25px" class="img-circle" alt="User Image">
              <span class="hidden-xs"><?php echo e(Auth::guard('admin')->user()->name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-lock"></i> <?php echo e(__('Logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('admin_logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                    </form>
                  </li>
                </ul>
              </li>
            </ul> 
          </li>
        </ul>
      </div>
    </nav>
  </header><?php /**PATH D:\2-Projects Data\Laravel + React Assignment\resources\views/back/layouts/header.blade.php ENDPATH**/ ?>