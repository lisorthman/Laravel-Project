<?php $__env->startSection('content'); ?>
   <h1>Edit Post</h1>
   <<form action="<?php echo e(route('posts.update', $posts->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?> <!-- This replaces the hidden '_method' field -->
    
    <!-- Title Input -->
    <?php if (isset($component)) { $__componentOriginal52d3950588707db14f7ba1be26bca751b90c06a2 = $component; } ?>
<?php $component = App\View\Components\FormInput::resolve(['label' => 'Title','name' => 'title','type' => 'text','placeholder' => 'Title','class' => 'form-control'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(old('title', $posts->title)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52d3950588707db14f7ba1be26bca751b90c06a2)): ?>
<?php $component = $__componentOriginal52d3950588707db14f7ba1be26bca751b90c06a2; ?>
<?php unset($__componentOriginal52d3950588707db14f7ba1be26bca751b90c06a2); ?>
<?php endif; ?>

    <!-- Body Textarea -->
    <?php if (isset($component)) { $__componentOriginal52d3950588707db14f7ba1be26bca751b90c06a2 = $component; } ?>
<?php $component = App\View\Components\FormInput::resolve(['label' => 'Body','name' => 'body','type' => 'textarea','class' => 'form-control'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rows' => '5','cols' => '50','value' => ''.e(old('body', $posts->body)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52d3950588707db14f7ba1be26bca751b90c06a2)): ?>
<?php $component = $__componentOriginal52d3950588707db14f7ba1be26bca751b90c06a2; ?>
<?php unset($__componentOriginal52d3950588707db14f7ba1be26bca751b90c06a2); ?>
<?php endif; ?>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lisorthman/Downloads/Travelly/resources/views/posts/edit.blade.php ENDPATH**/ ?>