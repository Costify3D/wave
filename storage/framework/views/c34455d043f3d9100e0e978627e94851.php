<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    
    <?php echo $__env->make('theme::partials.head', ['seo' => ($seo ?? null) ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <style>
        /* Hintergrundbild */
        body::before {
        content: '';
        position: fixed;
        inset: 0;
        background-image: url('/storage/backgrounds/wallpaper.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -2;
    }

    body::after {
        content: '';
        position: fixed;
        inset: 0;
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.75); /* Fester heller Overlay */
        z-index: -1;
    }

        /* Glas-Overlay (dunkel für Light Mode) */
        @media (prefers-color-scheme: light) {
            body::after {
                background-color: rgba(0, 0, 0, 0.6);
            }
        }

    </style>
</head>

<body 
    x-data
    x-cloak
    class="flex flex-col min-h-screen overflow-x-hidden <?php if($bodyClass ?? false): ?><?php echo e($bodyClass); ?><?php endif; ?>"
>
    
    <?php if (isset($component)) { $__componentOriginal37f86377bdff423908fd085f6e736be2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37f86377bdff423908fd085f6e736be2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '1929d69541870f736d4a47ee2f87330b::marketing.elements.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('marketing.elements.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal37f86377bdff423908fd085f6e736be2)): ?>
<?php $attributes = $__attributesOriginal37f86377bdff423908fd085f6e736be2; ?>
<?php unset($__attributesOriginal37f86377bdff423908fd085f6e736be2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37f86377bdff423908fd085f6e736be2)): ?>
<?php $component = $__componentOriginal37f86377bdff423908fd085f6e736be2; ?>
<?php unset($__componentOriginal37f86377bdff423908fd085f6e736be2); ?>
<?php endif; ?>

    
    <main class="flex-grow overflow-x-hidden">
        <?php echo e($slot); ?>

    </main>

    
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('notifications');

$__html = app('livewire')->mount($__name, $__params, 'lw-2008906163-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php echo $__env->make('theme::partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('theme::partials.footer-scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo e($javascript ?? ''); ?>

</body>
</html>
<?php /**PATH C:\laragon\www\costify3d\resources\themes/Costify3D/components/layouts/marketing.blade.php ENDPATH**/ ?>