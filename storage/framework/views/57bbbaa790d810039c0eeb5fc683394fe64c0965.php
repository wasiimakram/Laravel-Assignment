

<?php $__env->startSection('page_content'); ?>
<section class="content-header">
    <h1>
        <?php echo e(__('Edit Employe Details')); ?>

        
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo e(__('Home')); ?></a></li>
        <li><a href="<?php echo e(route('employes.index')); ?>"> <?php echo e(__('Employes Listing')); ?></a></li>
        <li class="active"><?php echo e(__('Edit Employe Details')); ?></li>
    </ol>
</section>

<section class="content">
    <form id="dataFrom" enctype="multipart/form-data" action="<?php echo e(route('employes.update',$data->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> <?php echo e(__('Alert!')); ?></h4>
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('Edit Employe Details')); ?></h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for=""><?php echo e(__('First Name')); ?></label>
                    <input required value="<?php echo e($data->first_name); ?>" type="text"  class="mainString form-control" name='first_name' id='first_name' 
                    placeholder="First Name">
                    <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group col-md-12">
                    <label for=""><?php echo e(__('Last Name')); ?></label>
                    <input required value="<?php echo e($data->last_name); ?>" type="text"  class="mainString form-control" name='last_name' id='last_name' 
                    placeholder="Last Name">
                    <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group col-md-12">
                    <label for=""><?php echo e(__(' Email')); ?></label>
                    <input required value="<?php echo e($data->email); ?>" type="text"  class="form-control" name='email' 
                    placeholder="Employe Email">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group col-md-12">
                    <label for=""><?php echo e(__(' Phone')); ?></label>
                    <input required value="<?php echo e($data->phone); ?>" type="text"  class="form-control" name='phone' 
                    placeholder="Employe Phone">
                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group col-md-12">
                    <label for=""><?php echo e(__(' Company')); ?></label>
                    <select class="form-control" id="company_id" name="company_id">
                        <option value="">-- Select Company --</option>
                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if($value->id == $data->company_id): ?> selected="" <?php endif; ?> value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['company_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div> 
            <!-- / End Row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <div class="text-right">
                <button type="submit" class="btn btn-success text-right"><i class="fa fa-floppy-o"></i>  
                <?php echo e(__('Save Record')); ?></button>
            </div>
        </div>
        <!-- /.box-footer -->
    </div>
    
</form>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
<script src="<?php echo e(asset('assets/back/plugins/jQueryFiller/js/file_upload_script.js')); ?>"></script>
<!--- Form Validation Script File ---->
<script src="<?php echo e(asset('assets/back/plugins/formValidation/jquery.validate.js')); ?>"></script>
<!-- Page JS File-->
<script src="<?php echo e(asset('assets/back/modules/agents/main.js')); ?>"></script>
<script src="<?php echo e(asset('assets/back/modules/agents/edit_main.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.app',['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2-Projects Data\Laravel + React Assignment\resources\views/back/employes/edit.blade.php ENDPATH**/ ?>