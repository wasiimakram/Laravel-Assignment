<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php $data=Auth::guard('admin')->user(); ?>
          
          <img src="<?php echo e(asset('assets/back/images/admin.png ')); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e(Auth::guard('admin')->user()->name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(__('Online')); ?></a>
        </div>
      </div>
     <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><?php echo e(__('CMS Navigation')); ?></li>

      

        

        <li class="<?php echo e((request()->is('adminarea')) ? 'active' : ''); ?>">
          <a href="<?php echo e(route('adminarea')); ?>">
            <i class="fa fa-dashboard"></i> <span><?php echo e(__('Dashboard')); ?></span>
          </a>
        </li>
        <li class="<?php echo e((request()->is('adminarea/employes')) ? 'active' : ''); ?>">
          <a href="<?php echo e(route('employes.index')); ?>">
            <i class="fa fa-users text-yellow"></i> <span><?php echo e(__('Manage Employes')); ?></span>
          </a>
        </li>
        <li class="<?php echo e((request()->is('adminarea/companies')) ? 'active' : ''); ?>">
          <a href="<?php echo e(route('companies.index')); ?>">
            <i class="fa fa-building text-yellow"></i> <span><?php echo e(__('Manage Companies')); ?></span>
          </a>
        </li>


        <li>
          <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out text-red"></i> <span><?php echo e(__('messages.logout')); ?></span>
          </a>
          <form id="logout-form" action="<?php echo e(route('admin_logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
          </form>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside><?php /**PATH D:\2-Projects Data\Laravel + React Assignment\resources\views/back/layouts/sidebar.blade.php ENDPATH**/ ?>