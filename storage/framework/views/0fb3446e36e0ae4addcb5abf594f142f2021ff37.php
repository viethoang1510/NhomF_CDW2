
<?php $__env->startSection('content'); ?>
<div class="container jumbotron   border border-success">
    <h2>Quản lí Banner quảng cáo</h2>
           
    <table class="table">
      <tbody>
             
               <tr class="bg-info text-white">
                <th>Ảnh slide</th>
                
                <th>Thao tác</th>
              </tr>
               
               <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
           <tr>
            <td><div class="" ><img src="../public/upload/<?php echo e($item->slide1); ?>" alt="Product Image" style="width: 300px;"></div></td>
            
            <td> 
              <a class="button btn btn-success" href=""><i class="fas fa-tools"></i>  Sửa</a>
              <form class="d-inline-block " action="<?php echo e(route('banner.destroy',$item->id)); ?>" method="post" >
                <?php echo e(csrf_field()); ?>

                <?php echo method_field('DELETE'); ?>
                
                
                
                
                
                <input type="submit" value="Xóa" class="button btn btn-secondary">
                </form>
            
            </td>
          </tr>
          
        
  
       
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </tbody>
    </table>
  
                <p class="d-flex justify-content-end">
                    <a class="btn btn-info btn-sm fa fa-plus" href="<?php echo e(route('banner.create')); ?>">Thêm banner</a>
                </p>

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Web_nhomF_1\resources\views/banner/index.blade.php ENDPATH**/ ?>