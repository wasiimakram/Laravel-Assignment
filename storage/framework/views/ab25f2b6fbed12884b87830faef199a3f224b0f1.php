<!---------updateModal Start Here------->
<div class="modal fade" id="updateModal" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><?php echo e(__('Update Record')); ?></h4> 
      </div>

      <div class="modal-body">
        <div class="alert alert-danger alert-dismissible error-main-div"style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <div class="error-div"></div>
        </div>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('companies.update',0)); ?>" id="updateForm">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" id="update_form_id">
        
        <div class="form-group">
          <label for="exampleInputEmail1"><?php echo e(__('Company Name')); ?></label>
          <input type="text" name="name" class="form-control" id="u_name" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"><?php echo e(__('Company Email')); ?></label>
          <input type="text" name="email" class="form-control" id="u_email" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"><?php echo e(__('Company Website')); ?></label>
          <input type="text" name="website" class="form-control" id="u_website" placeholder="Enter Website">
        </div>
        
        <div class="form-group">
              <label for=""><?php echo e(__('Upload New Image')); ?></label>
              <input type="file" name="image_path" class="upload_image11">
              <div class="attached_files_div"></div>
        </div>
        <div class="form-group oldThumb" style="display: none;">
            <label for=""><strong><?php echo e(__('Old Image')); ?></strong></label>
            <div class="ajaxImageShowDiv"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="closebtn btn btn-default pull-left" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
        <button type="submit" class="btn btn-primary subm"><?php echo e(__('Submit')); ?></button>
        </form>
      </div>
    </div>
  </div>
</div>
<!---------updateModal End Here--------->

<!---------AddModal Start Here------->
<div class="modal fade" id="addModal" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><?php echo e(__('Add Record')); ?></h4>
      </div>

      <div class="modal-body">

        <div class="alert alert-danger alert-dismissible error-main-div" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <div class="error-div"></div>
        </div>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('companies.store')); ?>" id="addCompanyForm">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="exampleInputEmail1"><?php echo e(__('Company Name')); ?></label>
          <input type="text" name="name" class="form-control" id="" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"><?php echo e(__('Company Email')); ?></label>
          <input type="email" name="email" class="form-control" id="" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"><?php echo e(__('Company Website')); ?></label>
          <input type="text" name="website" class="form-control" id="" placeholder="Enter Website">
        </div>
        <div class="form-group">
            <label for=""><?php echo e(__('Company Logo')); ?></label>
            <input type="file" name="image_path" class="upload_image2">
            <div class="attached_files_div"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="closebtn btn btn-default pull-left" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
        <button type="submit" class="btn btn-primary subm"><?php echo e(__('Submit')); ?></button>
        </form>
      </div>
    </div>
  </div>
</div>
<!---------AddModal End Here---------><?php /**PATH D:\2-Projects Data\laravel-assignment\resources\views/back/companies/modal.blade.php ENDPATH**/ ?>