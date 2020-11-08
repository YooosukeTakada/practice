<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">顧客</div>
                <table width="100%" border="1">
                    <thead>
                    <tr style="background-color: lightgray">
                        <td>氏名</td>
                        <td>店舗</td>
                        <td>郵便番号</td>
                        <td>住所</td>
                    </tr>
                    </thead>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <a href="/customers/<?php echo e($customer->id); ?>">
                                <?php echo e($customer->name); ?>

                            </a>
                        </td>
                        <td><?php echo e($customer->shop->name); ?></td>
                        <td><?php echo e($customer->postal); ?></td>
                        <td><?php echo e($customer->address); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                
                <table width="100%">
                    <tr>
                        <?php if($customers->lastPage() > 1): ?>
                        <td width="120px"><a href="<?php echo e($customers->url(0)); ?>">最初のページへ</a></td>
                        <td width="120px">
                            <?php if($customers->previousPageUrl()): ?>
                            <a href="<?php echo e($customers->previousPageUrl()); ?>">前のページへ</a>
                            <?php endif; ?>
                        </td>
                        <td width="120px" style="text-align: center"><?php echo e($customers->currentPage()); ?>

                            / <?php echo e($customers->lastPage()); ?></td>
                        <td width="120px">
                            <?php if($customers->nextPageUrl()): ?>
                            <a href="<?php echo e($customers->nextPageUrl()); ?>">次のページへ</a>
                            <?php endif; ?>
                        </td>
                        <td width="120px"><a href="<?php echo e($customers->url($customers->lastPage())); ?>">最後のページへ</a>
                        </td>

                        <?php endif; ?>
                    </tr>
                </table>
                


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\TEST1\resources\views/customers/index.blade.php ENDPATH**/ ?>