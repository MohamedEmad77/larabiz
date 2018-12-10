<?php $__env->startSection('content'); ?>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Create Listing<a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

                  <div class="panel-body">
                      <?php if(session('status')): ?>
                          <div class="alert alert-success">
                              <?php echo e(session('status')); ?>

                          </div>
                      <?php endif; ?>

                      <?php echo Form::open(['action' => 'ListingController@store', 'method' => 'POST']); ?>

                        <?php echo e(Form::bsText('name', '', ['placeholder'=>'Company name'])); ?>

                        <?php echo e(Form::bsText('email', '', ['placeholder'=>'Company email'])); ?>

                        <?php echo e(Form::bsText('phone', '', ['placeholder'=>'Company phone'])); ?>

                        <?php echo e(Form::bsText('website', '', ['placeholder'=>'Company website'])); ?>

                        <?php echo e(Form::bsText('address', '', ['placeholder'=>'Company address'])); ?>

                        <?php echo e(Form::bsTextArea('bio', '', ['placeholder'=>'about your bussiness'])); ?>

                        <?php echo e(Form::bsSubmit('submit')); ?>

                      <?php echo Form::close(); ?>



                  </div>
              </div>
          </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>