<a href="<?php echo e(url('auth/' . $slug . '/redirect')); ?>" class="flex <?php if(config('devdojo.auth.settings.center_align_social_provider_button_content')): ?><?php echo e('justify-center'); ?><?php endif; ?> items-center px-4 py-3 space-x-2.5 w-full h-auto text-sm rounded-md border border-zinc-200 text-zinc-600 hover:bg-zinc-100">
    <span class="w-5 h-5">
        <?php if(isset($provider->svg) && !empty(trim($provider->svg))): ?>
            <?php echo $provider->svg; ?>

        <?php else: ?>
            <span class="block w-full h-full rounded-full bg-zinc-200"></span>
        <?php endif; ?>
    </span>
    <span>Continue with <?php echo e($provider->name); ?></span>
</a><?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\components\elements\social-button.blade.php ENDPATH**/ ?>