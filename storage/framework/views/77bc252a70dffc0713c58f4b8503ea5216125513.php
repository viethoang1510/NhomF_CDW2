
<?php $__env->startSection('content'); ?>
<h5 style="font-weight: bold">Thêm ảnh cho Banner quảng cáo</h5>

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <form action="<?php echo e(route('banner.update',$banner->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>  
            
            <div class="form-group">
                <label for="slide1" style="font-weight: bold">Chọn hình ảnh cho slide:</label>
                <input type="file" name="slide1" id="slide1" class="form-control-file" value = "<?php echo e($banner->slide1); ?>">
            </div>
            <!-- <div class="form-group">
                <label for="ads" style="font-weight: bold">Chọn hình ảnh cho slide:</label>
                <input type="file" name="ads" id="ads" class="form-control-file"> 
            </div> -->
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-sm" value="Câp nhật">
            </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Web_nhomF_3\resources\views/banner/edit.blade.php ENDPATH**/ ?>