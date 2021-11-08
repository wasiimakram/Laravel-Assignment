

<?php $__env->startSection('page_content'); ?>
<section class="content-header">
    <h1>
        <?php echo e(__('Companies Listing')); ?>

        
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo e(__('Home')); ?></a></li>
        <li class="active"><?php echo e(__('Companies Listing')); ?></li>
    </ol>
</section>

<section class="content">
    <!--Alerts Code--->
    <?php if($errors->any()): ?>
    <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> <?php echo e(__('Error!')); ?></h4>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?> 


    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('Companies Listing')); ?></h3>

            <div class="box-tools pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New Company</button>
            </div>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <table id="record-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><?php echo e(__('ID')); ?></th>
                        <th><?php echo e(__('Logo')); ?></th>
                        <th><?php echo e(__('Name')); ?></th>
                        <th><?php echo e(__('Email')); ?></th>
                        <th><?php echo e(__('Website')); ?></th>
                        <th width="15%"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!$data->isEmpty()): ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($value->id); ?></td>
                        <td>
                            <?php if($value->logo): ?>
                                <img src="<?php echo e(asset(Storage::url('companies/'.$value->logo))); ?>" width="100px" height="50px">
                            <?php else: ?>
                                <img src="<?php echo e(asset('assets/back/images/no_image.jpg')); ?>" width="100px" height="50px">
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($value->name); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><a href="<?php echo e($value->website); ?>"><?php echo e($value->website); ?></a></td>
                        <td>
                            <a href="javascript:;" id="edit_record" data-id="<?php echo e($value->id); ?>" class="cBtns btn btn-primary btn-sm"
                            data-toggle="tooltip" data-original-title="Edit">
                            
                                <i class="fa fa-edit"></i></a>

                            <a href="javascript:;" data-id="<?php echo e($value->id); ?>" id="delete_record" class="cBtns btn btn-danger btn-sm"
                            data-toggle="tooltip" data-original-title="Delete">
                                <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr style="text-align:center">
                            <td colspan="10">No Record Found!</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
            <?php echo e($data->links()); ?>

        </div>
        <!-- /.box-body -->

        <!-- <div class="box-footer">
            Footer
          </div>
          /.box-footer -->
    </div>

</section>

<?php echo $__env->make('back.companies.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/jQueryFiller/css/jquery.filer.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/jQueryFiller/css/themes/jquery.filer-dragdropbox-theme.css')); ?>">
<script src="<?php echo e(asset('assets/back/plugins/jQueryFiller/js/jquery.filer.js')); ?>"></script>
<script src="<?php echo e(asset('assets/back/plugins/jQueryFiller/js/file_upload_script.js')); ?>"></script>
<!-- Page JS File-->
<script src="<?php echo e(asset('assets/back/modules/companies/main.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.app',['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2-Projects Data\laravel-assignment\resources\views/back/companies/index.blade.php ENDPATH**/ ?>