<?php $__env->startSection('title', '店舗一覧'); ?>
<?php $__env->startSection('content'); ?>


    <table class="table">
        <thead>
        <div class="nav-item">
            <a class="nav-link" href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>
        </div>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
        <tr>
            <th scope="col">店舗名</th>
            <th scope="col">住所</th>
            <th scope="col">電話番号</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th>
            <a href="/shop/<?php echo e($shop->id); ?>" type="button" class="btn btn-outline-info"><?php echo e($shop->name); ?></a>
            </th>
            <td><?php echo e($shop->address); ?></td>
            <td><?php echo e($shop->phone_number); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/shop.blade.php ENDPATH**/ ?>