
<?php $__env->startSection('content'); ?>
 <!-- slide trình chiếu -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to=""></li>
        </ul>
            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item <?php echo e($key == 1 ? 'active' : ''); ?> ">
                <img class="d-block w-100" src="public/upload/<?php echo e($item->slide1); ?>">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>
 <!-- kết thúc slide -->
 <a href="<?php echo e(route('test')); ?>">Gửi mail</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Web_nhomF_3\resources\views/home.blade.php ENDPATH**/ ?>