<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">役職一覧</div>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: lightgray">
                            <td>ID</td>
                            <td>役職コード</td>
                            <td>役職</td>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($role->id); ?></td>
                                <td><?php echo e($role->name); ?></td>
                                <td><?php echo e($role->memo); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\TEST1\resources\views/roles/index.blade.php ENDPATH**/ ?>