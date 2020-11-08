<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">顧客新規登録</div>
                    <form action="/customers" method="POST">
                        <?php echo csrf_field(); ?>
                        <p>氏名：<input type="text" name="name" value="<?php echo e(old('name')); ?>"></p>
                        <p>店舗番号：<input type="text" name="shop_id" value="<?php echo e(old('shop')); ?>"></p>
                        <p style="font-size: 0.75em">1 東京本店, 2 名古屋支店, 3 大阪支店</p>
                        <p>郵便番号：<input type="text" name="postal" value="<?php echo e(old('postal')); ?>"></p>
                        <p>住所：<input type="text" name="address" value="<?php echo e(old('address')); ?>"></p>
                        <p>メール：<input type="text" name="email" value="<?php echo e(old('email')); ?>"></p>
                        <p>生年月日：<input type="text" name="birthdate" value="<?php echo e(old('birthdate')); ?>"></p>
                        <p>電話番号：<input type="text" name="phone" value="<?php echo e(old('phone')); ?>"></p>
                        <p>クレーマーフラグ：<input type="text" name="kramer_flag" value="<?php echo e(old('kramer_flag')); ?>"></p>
                        <p style="font-size: 0.75em">0 問題ない顧客, 1 クレーマー顧客</p>
                        <p style="text-align: center"><button class="btn btn-primary" type="submit">　　登　録　　</button></p>
                    </form>

                    
                    <?php if( $errors->any() ): ?>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\TEST1\resources\views/customers/create.blade.php ENDPATH**/ ?>