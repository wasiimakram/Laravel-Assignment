<!doctype html>
<html lang="en">
<?php echo $__env->make('front.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<title>Laravel APP | <?php echo e($title); ?></title>

<body>

<?php echo $__env->make('front.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="like_button_container"></div>

<?php echo $__env->yieldContent('page_content'); ?>

<?php echo $__env->make('front.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('page_scripts'); ?>
<?php echo $__env->yieldPushContent('page_scripts'); ?>
<?php echo $__env->make('front.layouts.footer_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</body>
</html><?php /**PATH D:\2-Projects Data\laravel-assignment\resources\views/front/layouts/app.blade.php ENDPATH**/ ?>