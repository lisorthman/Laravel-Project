<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Dashboard</h1>
        <p>Welcome, <?php echo e(auth()->user()->name); ?>! You are logged in.</p>

        <!-- Button to View Blog -->
        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">View Blog</a>

        <!-- Logout Button -->
        <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lisorthman/Downloads/Travelly/resources/views/dashboard.blade.php ENDPATH**/ ?>