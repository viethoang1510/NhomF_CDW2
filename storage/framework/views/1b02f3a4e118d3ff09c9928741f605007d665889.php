<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'Laravel')); ?>

        </a>
        <a href="#" style="padding-right:15px;padin">Giới thiệu</a>
        <a href="#">Liên hệ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        <select class="form-control m-bot12" name="category" style="width: 9em;margin-left: 20px">
            <option>Danh mục</option>
            <?php $__currentLoopData = $listCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e(data_get($category,'category_name')); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav mr-auto">
                <form class="s" style=" padding-left: 10%;display: flex;">
                    <input type="search" class="sb" name="q" autocomplete="off"
                        style="border: 2px solid gainsboro;border-radius: 20px 20px;" />
                    <i class="sbtn fa fa-search" style="margin-top: 8px;margin-left: -28px;"></i>
                </form>


        </div>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->

            <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
            <?php if(Route::has('register')): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
            </li>
            <?php endif; ?>
            <?php else: ?>
           
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <?php if(Auth::check() && Auth::user()->role == 1): ?>
                    <a class="dropdown-item" href="<?php echo e(route('admin.show')); ?>">
                        <i class='fas fa-database'></i>
                        Trang quản trị
                    </a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="<?php echo e(route('admin.detailuser')); ?>">
                        <i class="fas fa-user"></i>
                        Thông tin tài khoản

                    </a>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class='fas fa-sign-in-alt'></i>
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
            <?php endif; ?>
        </ul>
    </div>
    </div>

</nav><?php /**PATH C:\xampp\htdocs\Web_nhomF_1\Web_nhomF_1\resources\views/pages/customer/header.blade.php ENDPATH**/ ?>