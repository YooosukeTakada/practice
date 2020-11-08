<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">社員一覧
                    </div>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: lightgray">
                            <td>氏名</td>
                            <td>所属店舗</td>
                            <td>ロール</td>
                            <td>メール</td>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <tr>
                            <td><?php echo e($user->name); ?></td> 
                            <td><?php echo e($user->shop->name); ?></td>
                            <td><?php echo e($user->role->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\TEST1\resources\views/users/index.blade.php ENDPATH**/ ?>