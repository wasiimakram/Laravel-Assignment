

<?php $__env->startSection('page_content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e(__('Dashboard')); ?>

       </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i><?php echo e(__(' Home')); ?></a></li>
        <li class="active"><?php echo e(__('Dashboard')); ?></li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo e($companies); ?></h3>

              <p><?php echo e(__('Total Companies')); ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-building-o "></i>
            </div>
            <a href="<?php echo e(route('companies.index')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo e($employes); ?></h3>

              <p><?php echo e(__('Total Employees')); ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo e(route('employes.index')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
<!-- DataTables Files-->
<script src="<?php echo e(asset('assets/back/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/back/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('assets/back/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">

<script>$('#example1').DataTable({"order": [[ 3, "desc" ]]});</script>
<script>$('#record-table').DataTable({"order": [[ 3, "desc" ]]});</script>

<!-- Page JS File-->
<script src="<?php echo e(asset('assets/back/modules/property/main.js')); ?>"></script>
<!--Show alert -->
<?php if(session('success')): ?>
    <script>make_toaster_alert('success','<?php echo e(session('success')); ?>')</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layouts.app',['title'=>$title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2-Projects Data\laravel-assignment\resources\views/back/dashboard/index.blade.php ENDPATH**/ ?>