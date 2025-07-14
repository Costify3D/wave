<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <?php echo $__env->make('theme::partials.head', ['seo' => ($seo ?? null) ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Used to add dark mode right away, adding here prevents any flicker -->
    <script>
        if (typeof(Storage) !== "undefined") {
            if(localStorage.getItem('theme') && localStorage.getItem('theme') == 'dark'){
                document.documentElement.classList.add('dark');
            }
        }
    </script>
</head>
<body x-data class="relative bg-fixed bg-cover bg-center min-h-screen <?php if(config('wave.dev_bar')): ?> pb-10 <?php endif; ?>"
      style="background-image: url('/storage/backgrounds/your-wallpaper.webp');">

    
    <div class="absolute inset-0 bg-black/60 z-0"></div>

    
    <?php if (isset($component)) { $__componentOriginal790df3a3003b05a46d3e5fdd59aeab47 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal790df3a3003b05a46d3e5fdd59aeab47 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal790df3a3003b05a46d3e5fdd59aeab47)): ?>
<?php $attributes = $__attributesOriginal790df3a3003b05a46d3e5fdd59aeab47; ?>
<?php unset($__attributesOriginal790df3a3003b05a46d3e5fdd59aeab47); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal790df3a3003b05a46d3e5fdd59aeab47)): ?>
<?php $component = $__componentOriginal790df3a3003b05a46d3e5fdd59aeab47; ?>
<?php unset($__componentOriginal790df3a3003b05a46d3e5fdd59aeab47); ?>
<?php endif; ?>

    
    <div class="relative z-10 flex flex-col min-h-screen pl-0 justify-stretch lg:pl-64">

        
        <header class="lg:hidden px-5 block flex justify-between sticky top-0 z-40 bg-white/80 dark:bg-zinc-900/70 backdrop-blur-sm -mb-px border-b border-zinc-200/70 dark:border-zinc-700 h-[72px] items-center">
            <button x-on:click="window.dispatchEvent(new CustomEvent('open-sidebar'))" class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-md text-zinc-700 dark:text-zinc-200 hover:bg-gray-200/70 dark:hover:bg-zinc-700/70">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                </svg>
            </button>
            <?php if (isset($component)) { $__componentOriginal262b77ea6d221dabc34c6f9febac9fba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal262b77ea6d221dabc34c6f9febac9fba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.user-menu','data' => ['position' => 'top']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.user-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'top']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal262b77ea6d221dabc34c6f9febac9fba)): ?>
<?php $attributes = $__attributesOriginal262b77ea6d221dabc34c6f9febac9fba; ?>
<?php unset($__attributesOriginal262b77ea6d221dabc34c6f9febac9fba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal262b77ea6d221dabc34c6f9febac9fba)): ?>
<?php $component = $__componentOriginal262b77ea6d221dabc34c6f9febac9fba; ?>
<?php unset($__componentOriginal262b77ea6d221dabc34c6f9febac9fba); ?>
<?php endif; ?>
        </header>

        
        <main class="flex flex-col flex-1 xl:px-0 lg:pt-4 lg:h-screen">
            <div class="flex-1 h-full overflow-hidden border-t border-l-0 lg:border-l lg:rounded-tl-xl border-zinc-200/70 dark:border-zinc-700 bg-white/80 dark:bg-zinc-800/80 backdrop-blur-sm">
                <div class="w-full h-full px-5 sm:px-8 lg:overflow-y-scroll scrollbar-hidden lg:pt-5 lg:px-5">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </main>
    </div>

    
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('notifications');

$__html = app('livewire')->mount($__name, $__params, 'lw-523248218-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    
    <?php if(!auth()->guest() && auth()->user()->hasChangelogNotifications()): ?>
        <?php echo $__env->make('theme::partials.changelogs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    
    <?php echo $__env->make('theme::partials.footer-scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo e($javascript ?? ''); ?>


</body>
</html>
<?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\components\layouts\app.blade.php ENDPATH**/ ?>