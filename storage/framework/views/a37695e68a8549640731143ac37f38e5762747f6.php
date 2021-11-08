<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('assets/back/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(asset('assets/back/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('assets/back/bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('assets/back/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('assets/back/dist/js/demo.js')); ?>"></script>
<!-- PACE -->
<script src="<?php echo e(asset('assets/back/bower_components/PACE/pace.min.js')); ?>"></script>
<!-- Sweet Alert  -->
<script src="<?php echo e(asset('assets/back/plugins/sweet-alert/js/sweetalert2.min.js')); ?>"></script>
<!-- Jquery Confirm Alert  -->
<script src="<?php echo e(asset('assets/back/plugins/jquery-confirm/js/jquery-confirm.js')); ?>"></script>
<!-- Jquery Toaster  -->
<script src="<?php echo e(asset('assets/back/plugins/jQueryToaster/js/jquery.toast.js')); ?>"></script>
   
<!-- Select2 -->
<script src="<?php echo e(asset('assets/back/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>

<!-- Toggle Button Files-->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- DataTables Files-->
<script src="<?php echo e(asset('assets/back/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/back/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('assets/back/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<!--- Multi File Upload ---->
<link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/jQueryFiller/css/jquery.filer.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/jQueryFiller/css/themes/jquery.filer-dragdropbox-theme.css')); ?>">
<script src="<?php echo e(asset('assets/back/plugins/jQueryFiller/js/jquery.filer.js')); ?>"></script>
<!-- CK Editor -->
<script src="<?php echo e(asset('assets/back/bower_components/ckeditor/ckeditor.js')); ?>"></script>

<script src="<?php echo e(asset('assets/back/modules/common/footer_scripts.js')); ?>"></script>

<?php echo $__env->yieldContent('page_scripts'); ?>

<!--Show alert -->
<?php if(session('success')): ?>
<script>
    $(document).ready(function(){
        make_toaster_alert('success','<?php echo e(session('success')); ?>');
    }); 
</script>
<?php elseif(session('error')): ?>
<script>
    $(document).ready(function(){
        make_toaster_alert('error','<?php echo e(session('error')); ?>');
    }); 
</script>
<?php endif; ?>


<?php /**PATH D:\2-Projects Data\laravel-assignment\resources\views/back/layouts/footer_scripts.blade.php ENDPATH**/ ?>