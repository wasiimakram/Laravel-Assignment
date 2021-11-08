

<?php $__env->startSection('page_content'); ?>
<section class="content-header">
    <h1>
        <?php echo e(__('All Employes List')); ?>

        
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo e(__('Home')); ?></a></li>
        <li class="active"><?php echo e(__('All Employes List')); ?></li>
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
            <h3 class="box-title"><?php echo e(__('All Employes List')); ?></h3>

            <div class="box-tools pull-right">
               <div class="text-right topBtnDiv">
                    <a href="<?php echo e(route('employes.create')); ?>"class="btn btn-success">
                        <i class="fa fa-plus"></i> Add New Employe</a>
                </div>
            </div>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <table id="record-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><?php echo e(__('Employe ID')); ?></th>
                        <th><?php echo e(__('Employe Name')); ?></th>
                        <th><?php echo e(__('Employe Email')); ?></th>
                        <th><?php echo e(__('Employe Phone')); ?></th>
                        <th><?php echo e(__('Company')); ?></th>
                        <th width="15%"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!$data->isEmpty()): ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($value->id); ?></td>
                        <td><?php echo e($value->first_name.' '.$value->last_name); ?></td>
                        <td><a href="mailto:<?php echo e($value->email); ?>"><?php echo e($value->email); ?></a></td>
                        <td><?php echo e($value->phone); ?></td>
                        <td><?php echo e($value->company ? $value->company->name : ''); ?></td>
                        <td>
                            <a href="<?php echo e(route('employes.edit',$value->id)); ?>" class="cBtns btn btn-primary btn-sm"
                            data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-edit"></i></a>

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
            
            <div class="text-right">
                <?php echo e($data->links()); ?>

            </div>
        </div>
        <!-- /.box-body -->
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page_scripts'); ?>
<!-- Page JS File-->
<script src="<?php echo e(asset('assets/back/modules/employes/main.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('back.layouts.app',['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2-Projects Data\laravel-assignment\resources\views/back/employes/index.blade.php ENDPATH**/ ?>