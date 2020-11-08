<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <ul>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any('viewAny', auth()->user())): ?>
                                <li><a href="/users">社員一覧
                                    </a></li>
                            <?php endif; ?>
                            <li><a href="/roles">役職一覧</a></li>
                            <li><a href="/customers">顧客一覧</a></li>
                            <li><a href="/customers/create">顧客新規登録</a></li>
                            <li><a href="/customer_search">顧客検索</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\TEST1\resources\views/home.blade.php ENDPATH**/ ?>