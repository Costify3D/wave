<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <?php echo $__env->make('auth::includes.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body>
    <?php echo e($slot); ?>

</body>
</html><?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\components\layouts\empty.blade.php ENDPATH**/ ?>