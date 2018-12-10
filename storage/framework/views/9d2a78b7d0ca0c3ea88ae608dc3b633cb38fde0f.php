<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($listing->name); ?></div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>



                        <ul class="list-group">

                          <li class="list-group-item">Address: <?php echo e($listing->address); ?></li>
                          <li class="list-group-item">Website: <?php echo e($listing->website); ?></li>
                          <li class="list-group-item">email: <?php echo e($listing->email); ?></li>
                          <li class="list-group-item">phone: <?php echo e($listing->phone); ?></li>
                          <li class="list-group-item">Address: <?php echo e($listing->address); ?></li>

                        </ul>
                        <hr>
                        <div class="well">
                          <?php echo e($listing->bio); ?>

                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>