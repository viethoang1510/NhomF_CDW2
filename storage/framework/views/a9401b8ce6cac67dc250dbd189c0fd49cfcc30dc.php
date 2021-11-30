

<?php $__env->startSection('content'); ?>
<h5 style="font-weight: bold">SỬA THÔNG TIN NGƯỜI DÙNG</h5>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <form action="<?php echo e(route('user.update',$user->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="name" style="font-weight: bold">Tên người dùng</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo e($user->name); ?>">
            </div>
            <div class="form-group">
                <label for="email" style="font-weight: bold">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php echo e($user->email); ?>">
              
            </div>

            <div class="form-group">
                <label for="phonenumber" style="font-weight: bold">Số điện thoại</label>
                <input type="text" name="phonenumber" id="address" class="form-control" value="<?php echo e($user->phonenumber); ?>">
            </div>
            <div class="form-group">
                <label for="address" style="font-weight: bold">Địa chỉ</label>
                <input type="text" name="address" id="address" class="form-control" value="<?php echo e($user->address); ?>">
            </div>
            <div class="form-group">
                <label for="role" style="font-weight: bold">Quyền Quản Trị</label>
                <input type="text" name="role" id="role" class="form-control" value="<?php echo e($user->role); ?>">
            </div>  
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-sm" value="Lưu sản phẩm">                <input type="submit" class="btn btn-info btn-sm" value="Cập Nhập">

            </div>

            
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Web_nhomF\resources\views/account/edit.blade.php ENDPATH**/ ?>