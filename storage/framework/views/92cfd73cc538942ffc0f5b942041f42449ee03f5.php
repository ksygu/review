<?php $__env->startSection('title', '入力確認画面'); ?>
<?php $__env->startSection('content'); ?>

<form action="/shop/<?php echo e(optional($shop)->id); ?>/review/complete" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="title" class="form-control" id="exampleInputEmail1" value="<?php echo e($data['title']); ?>">
    <input type="hidden" name="user_name" class="form-control" id="exampleInputPassword1" value="<?php echo e($data['user_name']); ?>">
    <input type="hidden" name="body" class="form-control" id="exampleInputPassword1" value="<?php echo e($data['body']); ?>">

    <h3>入力内容確認ページ</h3>
    <div class="card-header">
        <div class="form-group">
            <label for="title">口コミタイトル</label>
            <div class="col-sm-10"><?php echo e($data['title']); ?></div>
        </div>
        <div class="form-group">
            <label for="user_name">投稿者名</label>
            <div class="col-sm-10"><?php echo e($data['user_name']); ?></div>
        </div>
        <div class="form-group">
            <label for="body">口コミ本文</label>
            <div class="col-sm-10"><?php echo e($data['body']); ?></div>
        </div>
        <button type="submit" value="submit" class="btn btn-outline-primary">投稿</button>
        <input type="button" onclick="history.back()" value="戻る" class="btn btn-outline-primary">
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/confirm.blade.php ENDPATH**/ ?>