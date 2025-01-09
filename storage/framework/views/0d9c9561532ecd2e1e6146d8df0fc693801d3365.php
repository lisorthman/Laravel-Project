<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'name', 'type' => 'text', 'rows' => 3, 'cols' => 40, 'value' => '', 'placeholder' => '', 'class' => 'form-control']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'name', 'type' => 'text', 'rows' => 3, 'cols' => 40, 'value' => '', 'placeholder' => '', 'class' => 'form-control']); ?>
<?php foreach (array_filter((['label', 'name', 'type' => 'text', 'rows' => 3, 'cols' => 40, 'value' => '', 'placeholder' => '', 'class' => 'form-control']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="form-group">
    <label for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
    <?php if($type === 'textarea'): ?>
        <textarea 
            name="<?php echo e($name); ?>" 
            id="<?php echo e($name); ?>" 
            rows="<?php echo e($rows); ?>" 
            cols="<?php echo e($cols); ?>" 
            placeholder="<?php echo e($placeholder); ?>" 
            class="<?php echo e($class); ?>"
        ><?php echo e(old($name, $value)); ?></textarea>
    <?php else: ?>
        <input 
            type="<?php echo e($type); ?>" 
            name="<?php echo e($name); ?>" 
            id="<?php echo e($name); ?>" 
            value="<?php echo e(old($name, $value)); ?>" 
            placeholder="<?php echo e($placeholder); ?>" 
            class="<?php echo e($class); ?>"
        />
    <?php endif; ?>
</div>
<?php /**PATH /Users/lisorthman/Downloads/Travelly/resources/views/components/form-input.blade.php ENDPATH**/ ?>