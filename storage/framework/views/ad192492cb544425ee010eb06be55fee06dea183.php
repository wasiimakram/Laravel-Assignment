<!DOCTYPE html>
<html>
<?php echo $__env->make('back.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<title>Laravel React App | <?php echo e($title); ?></title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php echo $__env->make('back.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('back.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="content-wrapper">

      <?php echo $__env->yieldContent('page_content'); ?>

  </div>

  <?php echo $__env->make('back.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
  <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>

  <?php echo $__env->make('back.layouts.footer_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldPushContent('page_scripts'); ?>

</body>
</html>
<?php /**PATH D:\2-Projects Data\Laravel + React Assignment\resources\views/back/layouts/app.blade.php ENDPATH**/ ?>