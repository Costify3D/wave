<a href="/" style="height:<?php echo e($height ?? '30'); ?>px; width:auto; display:block" aria-label="<?php echo e(config('app.name')); ?> Logo">
    <?php if($isImage): ?>
        <img src="<?php echo e(url($imageSrc)); ?>" style="height:100%; width:auto" alt="" />
    <?php else: ?>
        <?php echo str_replace('<svg', '<svg style="height:100%; width:auto"', $svgString); ?>

    <?php endif; ?>
</a><?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\components\elements\logo.blade.php ENDPATH**/ ?>