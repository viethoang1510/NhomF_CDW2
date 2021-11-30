
<?php $__env->startSection('content'); ?>
<div class="container jumbotron border border-success">
    <h2>Danh sách người dùng hệ thống</h2>


    <table class="table">
        <thead class="bg-warning">
            <tr class="text-white">
                <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                <table class="table">
                    <thead class="bg-warning">
                        <tr class="text-white">
                            <th>Tên Người dùng</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Thao tác</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>                          
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td>
                                <?php echo e($user->phonenumber); ?>

                            </td>
                            <td>
                                <?php echo e($user->address); ?>

                            </td>

                            <td>

                                <form class="d-inline-block " action="<?php echo e(route('admin.listuser',$user->id)); ?>"
                                    method="post">
                                    <a class="button btn btn-success" href="<?php echo e(route('user.edit',$user->id)); ?>"><i
                                            class="fas fa-tools"></i> Sửa</a>
                                    <form class="d-inline-block "
                                        onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')"
                                        action="<?php echo e(route('user.destroy',$user->id)); ?>" class="active styling-edit"
                                        ui-toggle-class="" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo method_field('DELETE'); ?>
                                        
                                        
                                        
                                        
                                    <button type="submit" class="button btn btn-danger">
                                        <i class="fas fa-trash-alt"></i> Xóa user

                                    </button>

                                </form>

                            </td>
                        </tr>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Web_nhomF_3\resources\views/account/index.blade.php ENDPATH**/ ?>