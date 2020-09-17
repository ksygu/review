<?php $__env->startSection('title', '店舗詳細'); ?>
<?php $__env->startSection('content'); ?>

    <a href="/" type="button" class="btn btn-outline-info">ホーム</a>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="card-body">
                    <h1 class="card-title">店舗名 : <?php echo e(optional($shop)->name); ?></h1>
                    <p class="card-text">住所 : <?php echo e(optional($shop)->address); ?></p>
                    <p class="card-text">電話番号 : <?php echo e(optional($shop)->phone_number); ?></p>
                </div>
            </div>
        </div>
    </div>


    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="/shop/<?php echo e(optional($shop)->id); ?>/review/<?php echo e(optional($review)->id); ?>" method="post">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="id" value="<?php echo e(optional($review)->id); ?>">
            <ul class="list-group">
                <li class="list-group-item">口コミタイトル : <?php echo e(optional($review)->title); ?></li>
                <li class="list-group-item">投稿者名 : <?php echo e(optional($review)->user_name); ?></li>
                <li class="list-group-item">口コミ本文 : <?php echo e(optional($review)->body); ?></li>
                <li class="list-group-item">投稿日時 : <?php echo e(optional($review)->time); ?></li>
            </ul>
            <input type="submit" value="削除">
            <a href="/shop/<?php echo e(optional($shop)->id); ?>/review/<?php echo e(optional($review)->id); ?>/edit" type="button" class="btn btn-outline-info">編集</a>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($reviews->links()); ?>



    <div class="card-header">
    <h3>口コミ投稿フォーム</h3>
        <?php if(count($errors) > 0): ?>
            <p>入力に問題があります。再入力してください。</p>
        <?php endif; ?>
            <form action="/shop/<?php echo e(optional($shop)->id); ?>/review/confirm" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <?php if($errors->has('title')): ?>
                        <p><?php echo e($errors->first('title')); ?></p>
                    <?php endif; ?>
                    <label for="title">口コミタイトル</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="<?php echo e(old('title')); ?>">
                </div>
                <div class="form-group">
                    <?php if($errors->has('user_name')): ?>
                        <p><?php echo e($errors->first('user_name')); ?></p>
                    <?php endif; ?>
                    <label for="user_name">投稿者名</label>
                    <input type="text" name="user_name" class="form-control" id="exampleInputPassword1" value="<?php echo e(old('user_name')); ?>">
                </div>
                <div class="form-group">
                    <?php if($errors->has('body')): ?>
                        <p><?php echo e($errors->first('body')); ?></p>
                    <?php endif; ?>
                    <label for="body">口コミ本文</label>
                    <textarea type="text" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo e(old('body')); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">送信</button>
            </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/detail.blade.php ENDPATH**/ ?>