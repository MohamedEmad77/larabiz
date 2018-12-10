<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a href="/listings/create" class="btn btn-success btn-xs">Create Listing</a></span></div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <h3>Your Listings</h3>
                    <?php if(count($listings)): ?>
                      <table class="table table-striped">
                        <tr>
                          <th>Company Name</th>
                          <!-- <th>Company Email</th>
                          <th>Company phone</th>
                          <th>Company Website</th>
                          <th>Company address</th>
                          <th>Company bio</th> -->
                        </tr>

                          <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td><?php echo e($listing->name); ?></td>
                              <!-- <td><?php echo e($listing->email); ?></td>
                              <td><?php echo e($listing->phone); ?></td>
                              <td><?php echo e($listing->website); ?></td>
                              <td><?php echo e($listing->address); ?></td>
                              <td><?php echo e($listing->bio); ?></td> -->
                              <td><a class="pull-right btn btn-default" href="/listings/<?php echo e($listing->id); ?>/edit">Edit</a></td>
                              <td>
                                <?php echo Form::open(['action' => ['ListingController@destroy', $listing->id], 'method' => 'POST', 'class'=> 'pull-left']); ?>


                                  <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                  <?php echo e(Form::bsSubmit('Delete', ['class'=>'btn btn-danger pull-left'])); ?>

                                <?php echo Form::close(); ?>

                              </td>

                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>