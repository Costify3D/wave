<?php if (isset($component)) { $__componentOriginal549c94d872270b69c72bdf48cb183bc9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal549c94d872270b69c72bdf48cb183bc9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.link','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal549c94d872270b69c72bdf48cb183bc9)): ?>
<?php $attributes = $__attributesOriginal549c94d872270b69c72bdf48cb183bc9; ?>
<?php unset($__attributesOriginal549c94d872270b69c72bdf48cb183bc9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal549c94d872270b69c72bdf48cb183bc9)): ?>
<?php $component = $__componentOriginal549c94d872270b69c72bdf48cb183bc9; ?>
<?php unset($__componentOriginal549c94d872270b69c72bdf48cb183bc9); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\components\elements\link.blade.php ENDPATH**/ ?>