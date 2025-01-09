index.blade.php 

<?php $__env->startSection('content'); ?>
    <h1>Blog Posts</h1>

    <?php if($posts->count()): ?>
        <div class="list-group mb-4">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="list-group-item list-group-item-action">
                    <h5 class="mb-1"><?php echo e($post->title); ?></h5>
                    <p class="mb-1"><?php echo e(Str::limit($post->body, 150)); ?></p>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <p>No posts found!</p>
    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">Create Post</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lisorthman/Downloads/Travelly/resources/views/posts/index.blade.php ENDPATH**/ ?>