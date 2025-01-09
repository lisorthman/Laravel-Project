<?php $__env->startSection('content'); ?>
   <a href="/posts" class="btn btn-default">Go Back</a>
   <h1><?php echo e($posts->title); ?></h1> 
   <div>
    <?php echo e($posts->body); ?>

   </div>
   <hr>
   <small>Written on <?php echo e($posts->created_at); ?> </small>
   <hr>
   <a href="/posts/<?php echo e($posts->id); ?>/edit" class="btn btn-default">Edit</a>

   <form action="<?php echo e(route('posts.destroy', $posts->id)); ?>" method="POST" class="pull-right">
      <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?> <!-- This replaces the hidden '_method' field -->
      <button type="submit" class="btn btn-danger">Delete</button>
  </form>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lisorthman/Downloads/Travelly/resources/views/posts/show.blade.php ENDPATH**/ ?>