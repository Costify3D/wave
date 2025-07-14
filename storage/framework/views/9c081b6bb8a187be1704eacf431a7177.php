<header x-data="{ mobileMenuOpen: false }" class="absolute z-30 w-full">
    <?php if (isset($component)) { $__componentOriginala766c2d312d6f7864fe218e2500d2bba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala766c2d312d6f7864fe218e2500d2bba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '5356d735b60953a9e4d1ee0912eba302::container','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="flex relative z-30 justify-between items-center h-24 md:space-x-8">
            <div class="inline-flex">
            <!-- data-replace='{ "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }' -->
                <a href="<?php echo e(route('home')); ?>" class="flex justify-center items-center space-x-3 text-blue-500 brightness-0 transition-all duration-300 ease-out transform hover:brightness-100 grayscale-100">
                   <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['class' => 'w-auto h-7']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-auto h-7']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $attributes = $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $component = $__componentOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
                </a>
            </div>
            <div class="flex flex-grow justify-end -my-2 -mr-2 md:hidden">
                <button @click="mobileMenuOpen = true" type="button" class="inline-flex justify-center items-center p-2 rounded-full transition duration-150 ease-in-out text-zinc-400 hover:text-zinc-500 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 focus:text-zinc-500">
                    <svg class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                </button>
            </div>

            <?php echo $__env->make('theme::partials.menus.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $attributes = $__attributesOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $component = $__componentOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__componentOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>
    
    <?php echo $__env->make('theme::partials.menus.app-mobile', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</header>
<?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\partials\header-app.blade.php ENDPATH**/ ?>