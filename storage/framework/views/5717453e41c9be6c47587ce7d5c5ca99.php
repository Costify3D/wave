<?php $__env->startComponent('mail::message'); ?>

<?php if(! empty($greeting)): ?>
# <?php echo new \Illuminate\Support\EncodedHtmlString($greeting); ?>

<?php else: ?>
<?php if($level === 'error'): ?>
# <?php echo new \Illuminate\Support\EncodedHtmlString(__('Whoops!')); ?>

<?php else: ?>
# <?php echo new \Illuminate\Support\EncodedHtmlString(__('Hello!')); ?>

<?php endif; ?>
<?php endif; ?>


<?php $__currentLoopData = $introLines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo new \Illuminate\Support\EncodedHtmlString($line); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php if(isset($actionText)): ?>
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
<?php $__env->startComponent('mail::button', ['url' => $actionUrl, 'color' => $color]); ?>
<?php echo new \Illuminate\Support\EncodedHtmlString($actionText); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


<?php $__currentLoopData = $outroLines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo new \Illuminate\Support\EncodedHtmlString($line); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php if(! empty($salutation)): ?>
<?php echo new \Illuminate\Support\EncodedHtmlString($salutation); ?>

<?php else: ?>
<?php echo new \Illuminate\Support\EncodedHtmlString(__('Regards')); ?>,<br>
<?php echo new \Illuminate\Support\EncodedHtmlString(config('app.name')); ?>

<?php endif; ?>


<?php if(isset($actionText)): ?>
<?php $__env->slot('subcopy'); ?>
<?php echo new \Illuminate\Support\EncodedHtmlString(__(
    "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',
    [
        'actionText' => $actionText,
    ]
)); ?> <span class="break-all">[<?php echo new \Illuminate\Support\EncodedHtmlString($displayableActionUrl); ?>](<?php echo new \Illuminate\Support\EncodedHtmlString($actionUrl); ?>)</span>
<?php $__env->endSlot(); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\costify3d\resources\views/vendor/notifications/email.blade.php ENDPATH**/ ?>